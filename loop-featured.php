<ol id="cArticleList">

<?php
 get_featured_posts(array('method' => 'the_loop'));
 while (have_posts()) : the_post();
?>

<li>
    <a href="<?php the_permalink(); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark">
       <?php echo the_author_image(); ?>
    </a>
    
    <strong class="cCategory">
        <?php the_category(', '); ?>
    </strong>
    
    <h3 class="cArticleListTitle">
        <a href="<?php the_permalink(); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark">
        	<?php the_title(); ?>
        </a>
    </h3>
    
    <div class="cAuthor">
        <?php the_author_posts_link() ?>
    </div>
    
    <em class="cAuthorDesc">
        <?php the_author_meta( 'smallbio' ); ?>
    </em>
    
    <?php the_excerpt(); ?>
</li>

<?php
endwhile;
?>

</ol>