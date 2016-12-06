<?php
/**
 * Plugin Name: Plugin maison Nouvelle-Querbes
 * Plugin URI: http://www.nouvellequerbes.org
 * Description: Plugin maison.  Ajouter les shortcodes [gdrive], [gdrive_grid], [gdrive_pdf], [journal repertoire="" fichier="" texte=""], [wpb_childpages], [infoquerbes]
 * Version: .9
 * Author: Nicolas Beauchemin
 * Author URI: http://www.nouvellequerbes.org
 * License:  GPL2
 */

function gdrive_shortcode( $atts, $content = null ) {
    return '<iframe src="https://drive.google.com/embeddedfolderview?id=' . $content . '#list" frameborder="0" width="100%" height="500px" scrolling="auto"> </iframe>';
}
add_shortcode( 'gdrive', 'gdrive_shortcode' );

function gdrive_shortcode_grid( $atts, $content = null ) {
    return '<iframe src="https://drive.google.com/embeddedfolderview?id=' . $content . '#grid" frameborder="0" width="100%" height="500px" scrolling="auto"> </iframe>';
}
add_shortcode( 'gdrive_grid', 'gdrive_shortcode_grid' );



function gdrive_shortcode_grid_prive( $atts, $content = null ) {
    if(is_user_logged_in()) return '<iframe src="https://drive.google.com/embeddedfolderview?id=' . $content . '#grid" frameborder="0" width="100%" height="500px" scrolling="auto"> </iframe>';
}
add_shortcode( 'gdrive_grid_prive', 'gdrive_shortcode_grid_prive' );








function gdrive_shortcode_pdf( $atts, $content = null ) {
    return '<iframe src="https://docs.google.com/viewer?srcid=' . $content . '&pid=explorer&efh=false&a=v&chrome=false&embedded=true" width="100%" height="480px"></iframe>';
}


add_shortcode( 'gdrive_pdf', 'gdrive_shortcode_pdf' );





function journal_shortcode( $atts ) {

    // Attributes
    extract( shortcode_atts(
        array(
            'repertoire' => '',
            'fichier' => '',
            'texte' => '',
        ), $atts )
           );

    // Code
    return "<figure><a target='_blank' href='http://www.nouvellequerbes.org/documents/journaux/".$repertoire."/".$fichier.".pdf'><img src ='http://www.nouvellequerbes.org/documents/journaux/".$repertoire."/".$fichier.".jpg'><figcaption>".$texte."</figcaption></figure></a>";


}
add_shortcode( 'journal', 'journal_shortcode' );



//Fonction pour lister les pages enfants

function wpb_list_child_pages() {
    global $post;


    $childpages = wp_list_pages( 'sort_column=post_title&title_li=&child_of=' . $post->ID . '&echo=0' );
    if ( $childpages ) {
        $string = '<ul>' . $childpages . '</ul>';
    }
    return $string;
}
add_shortcode('wpb_childpages', 'wpb_list_child_pages');








//Fonction pour mettre un  lien mail
function cwc_mail_shortcode( $atts , $content=null ) {
    for ($i = 0; $i < strlen($content); $i++) $encodedmail .= "&#" . ord($content[$i]) . ';'; 
    return '<a href="mailto:'.$encodedmail.'">'.$encodedmail.'</a>';
}
add_shortcode('mailto', 'cwc_mail_shortcode');




function cacher_fct($atts, $content=null){
    session_start();
    $_SESSION['log']=1;

    if(is_user_logged_in()) return $content;
}

add_shortcode('cacher','cacher_fct');









?>
