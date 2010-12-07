<?php
/**
 * The Template for displaying all single posts of any type.
 *
 * @package WordPress
 * @subpackage inertia
 * @since The Inertia 1.0
 */
 	$post = $wp_query->post;
 
 	if ( in_category("gallery") ) {
		include("single-gallery.php");	
	}
	else {
		include("single-post-t.php");	
	}
 
 ?>