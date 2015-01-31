<?php
/**
 * Copied form WordPress file:
 * https://core.trac.wordpress.org/browser/tags/4.1/src/wp-includes/general-template.php#L2587
 */
function my_paginate_links( $args = '' ) {
        global $wp_query, $wp_rewrite;

        $total        = ( isset( $wp_query->max_num_pages ) ) ? $wp_query->max_num_pages : 1;
        $current      = ( get_query_var( 'paged' ) ) ? intval( get_query_var( 'paged' ) ) : 1;
        $pagenum_link = html_entity_decode( get_pagenum_link() );
        $query_args   = array();
        $url_parts    = explode( '?', $pagenum_link );

        if ( isset( $url_parts[1] ) ) {
                wp_parse_str( $url_parts[1], $query_args );
                $query_args = urlencode_deep( $query_args );
        }

        $pagenum_link = remove_query_arg( array_keys( $query_args ), $pagenum_link );
        $pagenum_link = trailingslashit( $pagenum_link ) . '%_%';

        $format  = $wp_rewrite->using_index_permalinks() && ! strpos( $pagenum_link, 'index.php' ) ? 'index.php/' : '';
        $format .= $wp_rewrite->using_permalinks() ? user_trailingslashit( $wp_rewrite->pagination_base . '/%#%', 'paged' ) : '?paged=%#%';

        $defaults = array(
                'base' => $pagenum_link, // http://example.com/all_posts.php%_% : %_% is replaced by format (below)
                'format' => $format, // ?page=%#% : %#% is replaced by the page number
                'total' => $total,
                'current' => $current,
                'show_all' => false,
                'prev_next' => true,
                'prev_text' => __('&laquo; Previous'),
                'next_text' => __('Next &raquo;'),
                'end_size' => 1,
                'mid_size' => 2,
                'type' => 'plain',
                'add_args' => $query_args, // array of query args to add
                'add_fragment' => '',
                'before_page_number' => '',
                'after_page_number' => ''
        );

        $args = wp_parse_args( $args, $defaults );

        // Who knows what else people pass in $args
        $total = (int) $args['total'];
        if ( $total < 2 ) {
                return;
        }
        $current  = (int) $args['current'];
        $end_size = (int) $args['end_size']; // Out of bounds?  Make it the default.
        if ( $end_size < 1 ) {
                $end_size = 1;
        }
        $mid_size = (int) $args['mid_size'];
        if ( $mid_size < 0 ) {
                $mid_size = 2;
        }
        $add_args = is_array( $args['add_args'] ) ? $args['add_args'] : false;
        $r = '';
        $page_links = array();
        $dots = false;

        if ( $args['prev_next'] && $current && 1 < $current ) :
                $link = str_replace( '%_%', 2 == $current ? '' : $args['format'], $args['base'] );
                $link = str_replace( '%#%', $current - 1, $link );
                if ( $add_args )
                        $link = add_query_arg( $add_args, $link );
                $link .= $args['add_fragment'];

                /**
                 * Filter the paginated links for the given archive pages.
                 *
                 * @since 3.0.0
                 *
                 * @param string $link The paginated link URL.
                 */
                $page_links[] = '<a class="prev arrow" href="' . esc_url( apply_filters( 'paginate_links', $link ) ) . '">' . $args['prev_text'] . '</a>';
        endif;
        for ( $n = 1; $n <= $total; $n++ ) :
                if ( $n == $current ) :
                        $page_links[] = "<a class='current'>" . $args['before_page_number'] . number_format_i18n( $n ) . $args['after_page_number'] . "</a>";
                        $dots = true;
                else :
                        if ( $args['show_all'] || ( $n <= $end_size || ( $current && $n >= $current - $mid_size && $n <= $current + $mid_size ) || $n > $total - $end_size ) ) :
                                $link = str_replace( '%_%', 1 == $n ? '' : $args['format'], $args['base'] );
                                $link = str_replace( '%#%', $n, $link );
                                if ( $add_args )
                                        $link = add_query_arg( $add_args, $link );
                                $link .= $args['add_fragment'];

                                /** This filter is documented in wp-includes/general-template.php */
                                $page_links[] = "<a href='" . esc_url( apply_filters( 'paginate_links', $link ) ) . "'>" . $args['before_page_number'] . number_format_i18n( $n ) . $args['after_page_number'] . "</a>";
                                $dots = true;
                        elseif ( $dots && ! $args['show_all'] ) :
                                $page_links[] = '<span class="dots">' . __( '&hellip;' ) . '</span>';
                                $dots = false;
                        endif;
                endif;
        endfor;
        if ( $args['prev_next'] && $current && ( $current < $total || -1 == $total ) ) :
                $link = str_replace( '%_%', $args['format'], $args['base'] );
                $link = str_replace( '%#%', $current + 1, $link );
                if ( $add_args )
                        $link = add_query_arg( $add_args, $link );
                $link .= $args['add_fragment'];

                /** This filter is documented in wp-includes/general-template.php */
                $page_links[] = '<a class="next arrow" href="' . esc_url( apply_filters( 'paginate_links', $link ) ) . '">' . $args['next_text'] . '</a>';
        endif;
        switch ( $args['type'] ) {
                case 'array' :
                        return $page_links;

                case 'list' :
                        $r .= "<ul class='pagination'>\n\t<li>";
                        $r .= join("</li>\n\t<li>", $page_links);
                        $r .= "</li>\n</ul>\n";
                        break;

                default :
                        $r = join("\n", $page_links);
                        break;
        }
        return $r;
}
