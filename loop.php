<?php
/**
 * The loop that displays posts.
 *
 * @package WordPress
 * @subpackage inertia
 * @since The Inertia 1.0
 */
?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if ( $wp_query->max_num_pages > 1 ) : ?>
	<div id="nav-above" class="navigation">
		<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts' ) ); ?></div>
		<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>' ) ); ?></div>
	</div><!-- #nav-above -->
<?php endif; ?>

<?php /* If there are no posts to display, such as an empty archive page */ ?>
<?php if ( ! have_posts() ) : ?>
	<div id="post-0" class="post error404 not-found">
		<h1 class="entry-title"><?php _e( 'Not Found' ); ?></h1>
		<div class="entry-content">
			<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.'); ?></p>
			<?php get_search_form(); ?>
		</div><!-- .entry-content -->
	</div><!-- #post-0 -->
<?php endif; ?>

<?php while ( have_posts() ) : the_post(); ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <?php if ($i == 1) { 
            if ( get_the_post_thumbnail($post->ID, "category-image") != "" ) {
    ?>
        

    <?php 	}
        } ?>
        <div class="contentLeft">
        <?php if ( get_the_post_thumbnail($post->ID, "category-image") != "" ) { ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark">
                <?php the_post_thumbnail("category-image"); ?>
            </a>
        <?php } else { ?>
            
        <?php } ?>
        </div>
        <div class="contentRight">
        <a href="<?php the_permalink(); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark">
            <?php the_author_image(); ?>
        </a>        
        
        <h2 class="cArticleListTitle"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

         <div class="cAuthor">
            <?php the_author_posts_link() ?>
        </div>
        <em class="cAuthorDesc">
            <?php the_author_meta( 'smallbio' ); ?>
        </em>
        
        <div class="cPostDate">
            <?php the_time('l, F jS, Y') ?>
        </div>
        
<?php if ( is_archive() || is_search() ) :  ?>
        <p>
            <?php the_excerpt(); ?>
        </p>
<?php else : ?>
        <p>
            <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>' ) ); ?>
            <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:' ), 'after' => '</div>' ) ); ?>
        </p>
<?php endif; ?>
		</div>
        <div class="grSpacerSmall"></div>
    </div><!-- #post-## -->

    <?php comments_template( '', true ); ?>
<?php endwhile; ?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
    <div id="nav-below" class="navigation">
        <div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts') ); ?></div>
        <div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>') ); ?></div>
    </div><!-- #nav-below -->
<?php endif; ?>
