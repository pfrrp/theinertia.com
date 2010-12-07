<?php

/**

 * The Header for our theme.

 *

 * Displays all of the <head> section and everything up till <div id="main">

 *

 * @package WordPress

 * @subpackage inertia

 * @since The Inertia 1.0

 */

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />

<title><?php wp_title( '|', true, 'right' ); ?></title>

    <link rel="profile" href="http://gmpg.org/xfn/11" />

    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="shortcut icon" href="<?php bloginfo( 'url' ); ?>/favicon.ico" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<script type="text/javascript">
    /* <![CDATA[ */
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-7548619-3']);
		_gaq.push(['_trackPageview']);
		
		(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
    /* ]]> */
    </script>    
	<script type="text/javascript" src="http://partner.googleadservices.com/gampad/google_service.js"></script> 
	<script type="text/javascript" src="http://www.google.com/jsapi?key=ABQIAAAAdEyKvOdQtZvzelUufB6OUhS1lJvKoaR7JgmmNzcyEA-BwIePCxQotTbUkTp1L0QXrt5uMGD39g9ekA"></script>
    <script type="text/javascript">/* <![CDATA[ */
		google.load("jquery", "1.4.2");
		//google.load("jqueryui", "1.8.2");
/* ]]> */	
	</script>
    <script type="text/javascript" src="<?php bloginfo("template_directory") ?>/global.js"></script>
    
    <script type='text/javascript'> 
	/* <![CDATA[ */
    GS_googleAddAdSenseService("ca-pub-8584891706273160");
    GS_googleEnableAllServices();
	/* ]]> */
    </script> 
    <script type='text/javascript'> 
	/* <![CDATA[ */
	<?php if (is_category('surf') || (is_single() && in_category('surf'))) { ?>
		GA_googleAddSlot("ca-pub-8584891706273160", "300x250_Inertia_Surf_Top_Right");
		GA_googleAddSlot("ca-pub-8584891706273160", "300x250_Inertia_Surf_Middle_Right");
		GA_googleAddSlot("ca-pub-8584891706273160", "728x90_Inertia_Surf_Top");				  
	<?php }elseif (is_category('music-art') || (is_single() && in_category('music-art'))) { ?>
		GA_googleAddSlot("ca-pub-8584891706273160", "300x250_Inertia_Music_and_Art_Top_Right");
		GA_googleAddSlot("ca-pub-8584891706273160", "300x250_Inertia_Music_and_Art_Middle_Right");
		GA_googleAddSlot("ca-pub-8584891706273160", "728x90_Inertia_Music_and_Art_Top");
	<?php }elseif (is_category('health') || (is_single() && in_category('health'))) { ?>
		GA_googleAddSlot("ca-pub-8584891706273160", "300x250_Inertia_Health_Top_Right");
		GA_googleAddSlot("ca-pub-8584891706273160", "300x250_Inertia_Health_Middle_Right");
		GA_googleAddSlot("ca-pub-8584891706273160", "728x90_Inertia_Health_Top");
	<?php }elseif (is_category('environment') || (is_single() && in_category('environment'))) { ?>
		GA_googleAddSlot("ca-pub-8584891706273160", "300x250_Inertia_Environment_Top_Right");
		GA_googleAddSlot("ca-pub-8584891706273160", "300x250_Inertia_Environment_Middle_Right");
		GA_googleAddSlot("ca-pub-8584891706273160", "728x90_Inertia_Environment_Top");
	<?php }elseif (is_category('business-media') || (is_single() && in_category('business-media'))) { ?>
		GA_googleAddSlot("ca-pub-8584891706273160", "300x250_Inertia_Business_and_Media_Top_Right");
		GA_googleAddSlot("ca-pub-8584891706273160", "300x250_Inertia_Business_and_Media_Middle_Right");
		GA_googleAddSlot("ca-pub-8584891706273160", "728x90_Inertia_Business_and_Media_Top");
	<?php }elseif (is_category('travel') || (is_single() && in_category('travel'))) { ?>
		GA_googleAddSlot("ca-pub-8584891706273160", "300x250_Inertia_Travel_Top_Right");
		GA_googleAddSlot("ca-pub-8584891706273160", "300x250_Inertia_Travel_Middle_Right");
		GA_googleAddSlot("ca-pub-8584891706273160", "728x90_Inertia_Travel_Top");
	<?php }elseif (is_category('politics') || (is_single() && in_category('politics'))) { ?>
		GA_googleAddSlot("ca-pub-8584891706273160", "300x250_Inertia_Politics_Top_Right");
		GA_googleAddSlot("ca-pub-8584891706273160", "300x250_Inertia_Politics_Middle_Right");
		GA_googleAddSlot("ca-pub-8584891706273160", "728x90_Inertia_Politics_Top");
	<?php }elseif (is_category('comedy') || (is_single() && in_category('comedy'))) { ?>
		GA_googleAddSlot("ca-pub-8584891706273160", "300x250_Inertia_Comedy_Top_Right");
		GA_googleAddSlot("ca-pub-8584891706273160", "300x250_Inertia_Comedy_Middle_Right");
		GA_googleAddSlot("ca-pub-8584891706273160", "728x90_Inertia_Comedy_Top");
	<?php }elseif (is_page('contributors') || is_author()) { ?>
		GA_googleAddSlot("ca-pub-8584891706273160", "300x250_Inertia_Contributors_Top_Right");
		GA_googleAddSlot("ca-pub-8584891706273160", "300x250_Inertia_Contributors_Middle_Right");
		GA_googleAddSlot("ca-pub-8584891706273160", "728x90_Inertia_Contributors_Top");
	<?php }else { ?>
		GA_googleAddSlot("ca-pub-8584891706273160", "300x250_Inertia_Homepage_Bottom_Center");
		GA_googleAddSlot("ca-pub-8584891706273160", "300x250_Inertia_Homepage_Top_Right");
		GA_googleAddSlot("ca-pub-8584891706273160", "728x90_Inertia_Homepage_Top");
		GA_googleAddSlot("ca-pub-8584891706273160", "982x91_Inertia_Homepage_Bottom_Middle");	
	<?php } ?>
	/* ]]> */
    </script> 
    <script type='text/javascript'> 
	/* <![CDATA[ */
    GA_googleFetchAds();
	/* ]]> */
    </script> 

<?php

	if ( is_singular() && get_option( 'thread_comments' ) )

		wp_enqueue_script( 'comment-reply' );

	wp_head();

?>

</head>

<body <?php body_class(); ?>>

<div id="wrapper" class="hfeed">

	<div id="header">
		<div id="socialBtnsAbs">
        	<ul>
            	<li><a href="http://www.facebook.com/pages/The-Inertia/128205643885929"><img src="<?php bloginfo("template_directory") ?>/images/facebook.png" alt="Facebook" /></a></li>
            	<li><a href="http://twitter.com/the_inertia"><img src="<?php bloginfo("template_directory") ?>/images/twitter.png" alt="Twitter" /></a></li>
            	<li><a href="<?php bloginfo('url'); ?>/rss2"><img src="<?php bloginfo("template_directory") ?>/images/rss.png" alt="RSS" /></a></li>
        	</ul>                                                
        </div>
    	<div class="gradientBody" id="hSpacerA"></div>

        <div id="hSearch">

            <form method="get" name="siteSearch" id="siteSearch" action="<?php bloginfo('url'); ?>/">

                <input type="text" name="s" id="searchTerms" value="SEARCH" />

                <input type="image" src="<?php bloginfo("template_directory") ?>/images/triangleEast.gif" id="searchImage" />

            </form>

        </div>

        <h1 id="logo">

            <a href="<?php bloginfo("url") ?>" title="theinertia.com">

                <img src="<?php bloginfo("template_directory") ?>/images/logo.png" alt="theinertia.com" />

            </a>

        </h1>

        <div id="hAd" class="ad">

            
			<script type="text/javascript">
			/* <![CDATA[ */
				<?php if (is_category('surf') || (is_single() && in_category('surf'))) { ?>
					GA_googleFillSlot("728x90_Inertia_Surf_Top");
				<?php }elseif (is_category('music-art') || (is_single() && in_category('music-art'))) { ?>
					GA_googleFillSlot("728x90_Inertia_Music_and_Art_Top");
				<?php }elseif (is_category('health') || (is_single() && in_category('health'))) { ?>
					GA_googleFillSlot("728x90_Inertia_Health_Top");
				<?php }elseif (is_category('environment') || (is_single() && in_category('environment'))) { ?>
					GA_googleFillSlot("728x90_Inertia_Environment_Top");
				<?php }elseif (is_category('business-media') || (is_single() && in_category('business-media'))) { ?>
					GA_googleFillSlot("728x90_Inertia_Business_and_Media_Top");
				<?php }elseif (is_category('travel') || (is_single() && in_category('travel'))) { ?>
					GA_googleFillSlot("728x90_Inertia_Travel_Top");
				<?php }elseif (is_category('politics') || (is_single() && in_category('politics'))) { ?>
				GA_googleFillSlot("728x90_Inertia_Politics_Top");
				<?php }elseif (is_category('comedy') || (is_single() && in_category('comedy'))) { ?>
					GA_googleFillSlot("728x90_Inertia_Comedy_Top");
				<?php }elseif (is_page('contributors') || is_author()) { ?>
					GA_googleFillSlot("728x90_Inertia_Contributors_Top");
				<?php }else { ?>				
					GA_googleFillSlot("728x90_Inertia_Homepage_Top");				
				<?php } ?>
			/* ]]> */
			</script>         
        </div>

        

        <div class="clear"></div>

        <div id="nav" role="navigation">

            <?php wp_nav_menu( array('menu' => 'nav', 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>

        </div>

	</div><!-- #header -->



	<div id="main">