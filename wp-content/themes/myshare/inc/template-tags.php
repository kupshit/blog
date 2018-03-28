<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package myshare
 */

/**
 * Get Post Views.
 */
if ( ! function_exists( 'myshare_get_post_views' ) ) :

function myshare_get_post_views($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return '<strong class="view-count">0</strong> Views';
    }
    return '<strong class="view-count">' . number_format($count) . '</strong> ' . __('Views', 'myshare');
}

endif;

/**
 * Set Post Views.
 */
if ( ! function_exists( 'myshare_set_post_views' ) ) :

function myshare_set_post_views($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

endif;

/**
 * Search Filter 
 */
if ( ! function_exists( 'myshare_search_filter' ) && ( ! is_admin() ) ) :

function myshare_search_filter($query) {
	if ($query->is_search) {
		$query->set('post_type', 'post');
	}
	return $query;
}

add_filter('pre_get_posts','myshare_search_filter');

endif;

/**
 * Filter the except length to 20 characters.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
if ( ! function_exists( 'myshare_custom_excerpt_length' ) ) :

function myshare_custom_excerpt_length( $length ) {
    return get_theme_mod('entry-excerpt-length', '35');
}
add_filter( 'excerpt_length', 'myshare_custom_excerpt_length', 999 );

endif;

/**
 * Customize excerpt more.
 */
if ( ! function_exists( 'myshare_excerpt_more' ) ) :

function myshare_excerpt_more( $more ) {
   return '... ';
}
add_filter( 'excerpt_more', 'myshare_excerpt_more' );

endif;

/**
 * Display the first (single) category of post.
 */
if ( ! function_exists( 'myshare_first_category' ) ) :
function myshare_first_category() {
    $category = get_the_category();
    if ($category) {
      echo '<a href="' . get_category_link( $category[0]->term_id ) . '" title="' . sprintf( __( "View all posts in %s", 'myshare' ), $category[0]->name ) . '" ' . '>' . $category[0]->name.'</a> ';
    }    
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
if ( ! function_exists( 'myshare_categorized_blog' ) ) :

function myshare_categorized_blog() {
    if ( false === ( $all_the_cool_cats = get_transient( 'myshare_categories' ) ) ) {
        // Create an array of all the categories that are attached to posts.
        $all_the_cool_cats = get_categories( array(
            'fields'     => 'ids',
            'hide_empty' => 1,
            // We only need to know if there is more than one category.
            'number'     => 2,
        ) );

        // Count the number of categories that are attached to the posts.
        $all_the_cool_cats = count( $all_the_cool_cats );

        set_transient( 'myshare_categories', $all_the_cool_cats );
    }

    if ( $all_the_cool_cats > 1 ) {
        // This blog has more than 1 category so myshare_categorized_blog should return true.
        return true;
    } else {
        // This blog has only 1 category so myshare_categorized_blog should return false.
        return false;
    }
}

endif;

/**
 * Flush out the transients used in myshare_categorized_blog.
 */
if ( ! function_exists( 'myshare_category_transient_flusher' ) ) :

function myshare_category_transient_flusher() {
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }
    // Like, beat it. Dig?
    delete_transient( 'myshare_categories' );
}
add_action( 'edit_category', 'myshare_category_transient_flusher' );
add_action( 'save_post',     'myshare_category_transient_flusher' );

endif;

/**
 * Disable specified widgets.
 */
//if ( ! function_exists( 'myshare_disable_specified_widgets' ) ) :

//function myshare_disable_specified_widgets( $sidebars_widgets ) {

//    if ( is_array($sidebars_widgets['header-ad']) ) {
 //          foreach($sidebars_widgets['header-ad'] as $i => $widget) {
  //              if( (strpos($widget, 'happythemes-') === false) ) {
   //                unset($sidebars_widgets['header-ad'][$i]);
    //            }
     //      }
    //}                    

    //return $sidebars_widgets;
//}
//add_filter( 'sidebars_widgets', 'myshare_disable_specified_widgets' );

//endif;

/**
 * Add link to Admin Bar.
 */

if ( ! function_exists( 'myshare_custom_toolbar_link' ) ) :

function myshare_custom_toolbar_link($wp_admin_bar) {
    $args = array(
        'id' => 'happythemes',
        'title' => 'Upgrade to Pro Theme', 
        'href' => 'https://www.happythemes.com/wordpress-themes/myshare/', 
        'meta' => array(
            'class' => 'happythemes', 
            'title' => '',
            'target'=> '_blank',
            )
    );
    $wp_admin_bar->add_node($args);
}
add_action('admin_bar_menu', 'myshare_custom_toolbar_link', 999);

endif;

