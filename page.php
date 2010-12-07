<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the wordpress construct of pages
 * and that other 'pages' on your wordpress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage inertia
 * @since The Inertia 1.0
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">
                <div id="cLeftColWide">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    
                    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <?php if ( is_front_page() ) { ?>
                            <h2 class="entry-title"><?php the_title(); ?></h2>
                        <?php } else { ?>	
                            <h1 class="entry-title"><?php the_title(); ?></h1>
                        <?php } ?>				
    
                        <div class="entry-content">
                            <?php the_content(); ?>
                            <?php //wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
                            <?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
                        </div><!-- .entry-content -->
                    </div><!-- #post-## -->
    
    <?php endwhile; ?>
                </div>
                <div id="cRightCol">
                    <?php dynamic_sidebar( 'inner-pages' ); ?>
                </div>
                <div class="clear"></div>
			</div><!-- #content -->
		</div><!-- #container -->

<?php get_footer(); ?>