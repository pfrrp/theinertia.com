<?php /*
Some thumbnail related post thingy; max 5!
*/ ?>
<?php $i = 0; ?>
<?php if ($related_query->have_posts()):?>
<div id="related">
<h3>You also might like:</h3>
<ol>
	<?php while ($related_query->have_posts()) : $related_query->the_post(); $i++; ?>
		<?php if (function_exists('has_post_thumbnail')): if (has_post_thumbnail()):?>
		<li <?php if ($i==5) { ?>class="noPad"<?php } ?>>
        	<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
			<?php the_post_thumbnail(); ?>
            <?php the_title(); ?>
            <!-- (<?php the_score(); ?>)-->
            </a>
        </li>
		<?php endif; endif; ?>
	<?php endwhile; ?>
</ol>
<div class="clear"></div>
</div>
<?php endif; ?>