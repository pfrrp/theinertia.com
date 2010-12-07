<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage inertia
 * @since The Inertia 1.0
 */

get_header(); ?>
    <div id="container">
        <div id="content" role="main">
            <div id="cLeftColWide">
                <h1 class="page-title"><?php
                    printf( single_cat_title( '', false ));
                ?></h1>
                <?php
                    //$category_description = category_description();
                    //if ( ! empty( $category_description ) )
                    //    echo '<div class="archive-meta">' . $category_description . '</div>';

                get_template_part( 'loop', 'category' );
            ?>
            </div>
            <div id="cRightCol">
            <?php dynamic_sidebar('inner-pages'); ?>
            </div>
        </div><!-- #content -->
    </div><!-- #container -->
<?php get_footer(); ?>