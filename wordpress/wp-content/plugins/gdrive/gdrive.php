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


?>
