<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts("paged=$paged&showposts=1&p=".theme_option("homepage_highlight"));
while (have_posts()) : the_post();
?>

<div id="cFeatured">
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
    	<?php the_post_thumbnail("highlight-image"); ?>
    </a>
    
   	<img src="<?php bloginfo("template_directory") ?>/images/triangleNorth.gif" alt="Featured Story" id="cFeaturedTriangle" />
    
    <div id="cFeaturedBody">
        <a href="<?php the_permalink(); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark">
        	<?php the_author_image(); ?>
        </a>
        
        <strong class="cCategory">
            <?php the_category(', '); ?>
        </strong>
        
        <h2 id="cFeaturedTitle">
            <a href="<?php the_permalink(); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark">
            	<?php the_title(); ?>
            </a>
        </h2>
        
        <div class="cAuthor">
            <?php the_author_posts_link() ?>
        </div>
        
        <em class="cAuthorDesc">
            <?php the_author_meta( 'smallbio' ); ?>
        </em>
        
        <p>
            <?php the_excerpt(); ?> 
            <a href="<?php the_permalink(); ?>" class="cMoreLink">MORE</a>
        </p>
    </div>
</div>

<?php endwhile; ?>