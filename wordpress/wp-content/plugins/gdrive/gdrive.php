<?php
/**
 * Plugin Name: Google Drive Folder
 * Plugin URI: http://www.nouvellequerbes.org
 * Description: Plugin maison pour insérer un répertoire google drive
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
return "<a target='_blank' href='http://www.nouvellequerbes.org/documents/journaux/".$repertoire."/".$fichier.".pdf'><img title='".$texte."' src ='http://www.nouvellequerbes.org/documents/journaux/".$repertoire."/".$fichier.".jpg'></a>";


}
add_shortcode( 'journal', 'journal_shortcode' );




?>
