<?php

/**

 * Template Name: Contributors Index

 *

 * @package WordPress

 * @subpackage inertia

 * @since The Inertia 1.0

 */



get_header(); ?>
		<div id="container">
			<div id="content" role="main">

				<div id="cLeftColWide">

                    <h1 class="page-title">Contributor Index</h1>
					<?php
						global $post;
					?>
                    <p> 
                    	<strong>Sort By:</strong> <a href="<?php the_permalink($post->ID) ?>">Alphabetical</a> | <a href="<?php the_permalink($post->ID) ?>/?sort=popular">Author Popularity</a>
                    </p>
					<?php
					global $wpdb;
					
					if (isset($_GET['sort']) && $_GET['sort'] == 'popular') {
						
						$user_ids = $wpdb->get_col("SELECT  u.ID
														FROM 	$wpdb->posts p, $wpdb->users u, $wpdb->postmeta pm 
														WHERE 	pm.post_id = p.ID
														AND 	p.post_author = u.ID										  
														AND 	p.post_status = 'publish'
														AND 	pm.meta_key = 'views'
														AND 	p.post_password = ''
														AND 	u.display_name != 'admin'
														GROUP BY u.ID
														ORDER BY sum(pm.meta_value+0) DESC");
						
					}
					
					else {

						$order = 'user_nicename';
    	                $user_ids = $wpdb->get_col("SELECT ID FROM $wpdb->users WHERE display_name != 'admin' ORDER BY $order"); // query users											
					}

                    foreach($user_ids as $user_id) : // start authors' profile "loop"

                    $user = get_userdata($user_id);

                    ?>

                   

                    <div id="author-<?php echo $user_id ?>" class="hentry author">
						<div class="contentLeft">
                    	<?php the_author_image($user_id); ?>
						</div>
                        <div class="contentRight">
                            <h2 class="cArticleListTitle"><?php echo '<a href="' . get_author_posts_url($user_id) . '">' . $user->display_name . '</a>'; ?></h2>
    
                            <em class="cAuthorDesc">
                
                            <?php the_author_meta( 'smallbio', $user_id ); ?>
                
                            </em>
    
                            <p><?php echo substr(get_the_author_meta('description', $user_id), 0, 500) ?>...<a href="<?php echo get_author_posts_url($user_id) ?>">Read more</a></p>
						</div>
                        <div class="grSpacerSmall"></div>
                    </div>

                    

                    <?php

                    endforeach; // end of authors' profile 'loop'

                    ?>

                </div>

                <div id="cRightCol">

                <?php dynamic_sidebar('inner-pages'); ?>

                </div>

			</div><!-- #content -->

		</div><!-- #container -->





<?php get_footer(); ?>

