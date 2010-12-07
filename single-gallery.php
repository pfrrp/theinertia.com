<?php
/**
 * The Template for displaying all single galleries.
 *
 * @package WordPress
 * @subpackage inertia
 * @since The Inertia 1.0
 */

get_header(); ?>

    <div id="content" role="main">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <div id="cLeftColGallery">
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( get_the_author_meta( 'description' ) ) : // If a user has filled out their description, show a bio on their entries  ?>
        <div id="articleAuthor">
        	<?php the_author_image(); ?>
            
            <h4 id="articleAuthorName">
				<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author() ?></a>
            </h4>
            <div id="articleAuthorDesc">
            	<?php the_author_meta( 'smallbio' ); ?>
            </div>
			<div id="articleAuthorBtns">
                <ul>
                    <li>
                        <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" title="Author Bio">
                            <img src="<?php bloginfo("template_directory") ?>/images/bio.png" alt="Bio" />
                            <span>bio/index</span>
                        </a>
                    </li>
                    <?php if (get_the_author_meta('feedburneremaillink') != '') { ?>
                    <li>
                        <a href="<?php the_author_meta('feedburneremaillink') ?>" title="Get Email Alerts">
                            <img src="<?php bloginfo("template_directory") ?>/images/email.png" alt="Get Alerts" />
                            <span>email alerts</span>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <div id="articleSocialBtns">
            	<div>
            	<script type="text/javascript">
				/* <![CDATA[ */
					tweetmeme_source = "the_inertia";	
				/* ]]> */
				</script>
            	<script type="text/javascript" src="http://tweetmeme.com/i/scripts/button.js"></script>
                </div>
                <div>
                    <div id="fb-root"></div>
                    <script type="text/javascript">
					/* <![CDATA[ */
					window.fbAsyncInit = function() {
						FB.init({appId: '145902605445710', status: true, cookie: true,
							 xfbml: true});
					};
					(function() {
						var e = document.createElement('script'); e.async = true;
						e.src = document.location.protocol +
					  '//connect.facebook.net/en_US/all.js';
						document.getElementById('fb-root').appendChild(e);
					}());
					 /* ]]> */
                    </script>                
                    <fb:like layout="box_count" show_faces="false" width="75" font="arial"></fb:like>          
                </div>
                <div>
					<script type="text/javascript">
					/* <![CDATA[ */
                    (function() {
                    var s = document.createElement('SCRIPT'), s1 = document.getElementsByTagName('SCRIPT')[0];
                    s.type = 'text/javascript';
                    s.async = true;
                    s.src = 'http://widgets.digg.com/buttons.js';
                    s1.parentNode.insertBefore(s, s1);
                    })();
					/* ]]> */
                    </script>
                    <a class="DiggThisButton DiggMedium"></a>               
                </div>
            </div>
        </div>
	<?php endif; ?>      
    <div id="articleBody">  
            <h1 class="entry-title"><?php the_title(); ?></h1>

            <div class="entry-meta">
                
            </div><!-- .entry-meta -->

            <div class="entry-content">
                <?php the_content(); ?>
                <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:'), 'after' => '</div>' ) ); ?>
            </div><!-- .entry-content -->
        </div><!-- #post-## -->
	
        <div id="nav-below" class="navigation">
            <div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link') . '</span> %title' ); ?></div>
            <div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link') . '</span>' ); ?></div>
        </div><!-- #nav-below -->
	</div>
    
	<?php comments_template( '', true ); ?>
    </div>
<?php endwhile; // end of the loop. ?>
    <div class="clear"></div>
</div><!-- #content -->
<?php get_footer(); ?>
