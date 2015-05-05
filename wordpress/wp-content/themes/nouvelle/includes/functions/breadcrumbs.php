<?php
function the_breadcrumb() {
    global $post;
    echo '<ul>';
    if (!is_home()) {
        echo '<li class="home-link">';
        echo '<a href="';
        echo get_option('home');
        echo '">';
        bloginfo('name');
        echo "</a></li><span class='separator'>//</span>";
        if (is_category() || is_single()) {
            the_category(' ');
            if (is_single()) {
                echo " ";
                the_title();
            }
        } elseif (is_page()) {
           if($post->post_parent){
                $anc = get_post_ancestors( $post->ID );
                $title = get_the_title();
                foreach ( $anc as $ancestor ) {
                    $output = '<li><a href="'.get_permalink($ancestor).'">'.get_the_title($ancestor).'</a></li>';
                }
                echo $output;
                echo '<span class="separator">//</span><li> '.$title.'</li>';
            } else {
                echo '<li><span> '.get_the_title().'</span></li>';
            }
        }
    }
    echo '</ul>';
}