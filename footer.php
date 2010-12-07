<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage inertia
 * @since The Inertia 1.0
 */
?>

	</div><!-- #main -->
    
 	<div class="clear"></div>
    <div class="grSpacerSmall"></div>
    
	<div id="footer" role="contentinfo">

<?php
	/* A sidebar in the footer? Yep. You can can customize
	 * your footer with four columns of widgets.
	 */
	 if (is_home()) {
		get_sidebar( 'footer' );
	 }
	 else {
		echo ' <div class="gradientBody gradientBorderW tallSpacer clear"></div> ';
	 }
?>

	
  
  	<div id="footerBottom">
    	<ul class="left">
        	<li><a href="/about">About</a></li>
            <li><a href="/advertise">Advertise</a></li>
            <li><a href="/terms-of-use">Terms of Use</a></li>
        </ul>
        
        <img src="<?php bloginfo("template_directory") ?>/images/logo.png" alt="The Inertia dot net" />
        
        <ul class="right">
        	<li><a href="/contact">Contact</a></li>
            <li><a href="/contribute">Get Involved</a></li>
            <li><a href="/privacy-policy">Privacy Policy</a></li>
        </ul>
        <div class="clear"></div>
    </div>
    
	</div>

</div><!-- #wrapper -->

<?php wp_footer(); ?>
</body>
</html>