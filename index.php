<?php
/**
 * Template Name: Home Index
 *
 * @package WordPress
 * @subpackage inertia
 * @since The Inertia 1.0
 */
get_header(); ?>

<div id="content" role="main">
    <div id="cLeftCol">
        <?php get_template_part( 'loop', 'highlight' ); ?>
        <?php dynamic_sidebar('home-left-col'); ?>
    </div>             
    <div id="cMidCol">
        <?php get_template_part( 'loop', 'featured' ); ?>
    </div>
    <div id="cRightCol">
        <?php dynamic_sidebar('home-right-col'); ?>
    </div>
</div><!-- #content -->
        
<?php get_footer(); ?>