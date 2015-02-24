<?php
function the_breadcrumb() {
    global $post;
    echo '<ul id="breadcrumbs">';
    if (!is_home()) {
        echo '<li class="home-link">';
        echo '<a href="';
        echo get_option('home');
        echo '">';
        bloginfo('name');
        echo "</a></li>  // ";
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
                    $output = '<a href="'.get_permalink($ancestor).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a>';
                }
                echo $output;
                echo '<span title="'.$title.'"> '.$title.'</span>';
            } else {
                echo '<li><span> '.get_the_title().'</span></li>';
            }
        }
    }
    echo '</ul>';
}

/*
function the_breadcrumb() {
    global $post;
    echo '<ul id="breadcrumbs">';
    if (!is_home()) {
        echo '<li class="home-link"><a href="';
        echo get_option('home');
        echo '">';
        echo 'Accueil';
        echo '</a></li><li class="separator"> // </li>';
        if (is_category() || is_single()) {
            echo '<li>';
            the_category(' </li><li class="separator"> > </li><li> ');
            if (is_single()) {
                echo '</li><li class="separator"> > </li><li>';
                the_title();
                echo '</li>';
            }
        } elseif (is_page()) {
            if($post->post_parent){
                $anc = get_post_ancestors( $post->ID );
                $title = get_the_title();
                foreach ( $anc as $ancestor ) {
                    $output = '<li><a href="'.get_permalink($ancestor).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a></li> <li class="separator">></li>';
                }
                echo $output;
                echo '<span title="'.$title.'"> '.$title.'</span>';
            } else {
                echo '<li><span> '.get_the_title().'</span></li>';
            }
        }
    }
    elseif (is_tag()) {single_tag_title();}
    elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
    elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
    elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
    elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
    elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
    elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
    echo '</ul>';
}
*/
?>