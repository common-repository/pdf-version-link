<?php
/*
Plugin Name: PDF Version Link
Plugin URI: http://wordpress.org/extend/plugins/pdf-version/
Description: Creates a link to a page that actually displays it as a PDF version.

Installation:

1) Install WordPress 4.0.0 or higher

2) Download the latest from:

http://wordpress.org/extend/plugins/pdf-version

3) Login to WordPress admin, click on Plugins / Add New / Upload, then upload the zip file you just downloaded.

4) Activate the plugin.

Version: 1.0
Author: TheOnlineHero - Tom Skroza
License: GPL2
*/

add_shortcode( 'pdf-version', 'pdf_version_shortcode' );

function pdf_version_shortcode($atts) {
  $url = $atts["url"];
  $name = $atts["name"];
  return "<a target='_blank' href='http://pdf-renderer.herokuapp.com/pdfs.pdf?url=".$url."'>".$name."</a>";
}

?>