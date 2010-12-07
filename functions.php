<?php
// Set up information
$inertia_theme_data = get_theme_data(TEMPLATEPATH.'/style.css');
define('THEME_NAME', $inertia_theme_data['Name']);
define('THEME_AUTHOR', $inertia_theme_data['Author']);
define('THEME_HOMEPAGE', $inertia_theme_data['URI']);
define('THEME_VERSION', trim($inertia_theme_data['Version']));
define('THEME_URL', get_bloginfo('template_url'));
define('THEME_FILE', str_replace(" ", "-", strtolower(THEME_NAME)));

function my_login_head() {
	echo "
	<style>
	body.login #login h1 a {
		background: url('" . get_bloginfo('template_url') . "/images/logo.png') center top no-repeat;
		height: 75px;
		width: 320px;
	}
	</style>
	";
}
function my_head() {
  echo '
<style type="text/css">
#header-logo{
background:url(' . get_bloginfo('template_url') . '/images/logo-sm.png) no-repeat;
width:175px;
}
#site-title {
	display:none;	
}
</style>';
}
add_action("login_head", "my_login_head");
add_action('admin_head', 'my_head', 11);

// Make theme available for translation
// Translations can be filed in the /languages/ directory
load_theme_textdomain(THEME_FILE, TEMPLATEPATH . '/languages');

$locale = get_locale();
$locale_file = TEMPLATEPATH . "/languages/$locale.php";
if ( is_readable( $locale_file ) )
	require_once( $locale_file );
	
$options = array (
	
	array(	"name" => __("Site Width", "magazine-basic"),
			"desc" => __("Select the width of your site.", "magazine-basic"),
			"id" => "site_width",
			"default" => "800",
			"type" => "site"),
	
	array(  "name" => __("First Sidebar Width", "magazine-basic"),
			"desc" => __("What would you like your first sidebar width to be?", "magazine-basic"),
            "id" => "sidebar_width1",
			"default" => "180",
            "type" => "first-sidebar"),
			
	array(  "name" => __("Second Sidebar Width", "magazine-basic"),
			"desc" => __("What would you like your second sidebar width to be?", "magazine-basic"),
            "id" => "sidebar_width2",
			"default" => "180",
            "type" => "second-sidebar"),

	array(  "name" => __("Sidebar Location", "magazine-basic"),
			"desc" => __("Where would you like your sidebars located?", "magazine-basic"),
            "id" => "sidebar_location",
			"default" => "5",
            "type" => "location"),

	array(  "name" => __("Header Logo", "magazine-basic"),
			"desc" => __("If you would like to display a logo in the header, please enter the file path above.", "magazine-basic"),
            "id" => "logo_header",
            "type" => "logo"),	
			
	array(  "name" => __("Logo or Blog Name Location", "magazine-basic"),
			"desc" => __("Where do you want your Logo or Blog Name located?", "magazine-basic"),
            "id" => "logo_location",
			"default" => "1",
            "type" => "logo-location"),	
			
	array(  "name" => __("User Login", "magazine-basic"),
			"desc" => __("Would you like to have a User Login section at the top of your site?", "magazine-basic"),
            "id" => "user_login",
			"default" => "1",
            "type" => "login"),

	array(  "name" => __("Highlighted Post", "magazine-basic"),
			"desc" => __("What is the ID of the post you want to highlight?", "magazine-basic"),
            "id" => "homepage_highlight",
			"default" => "0",
            "type" => "homepage-highlight"),

	array(  "name" => __("Display Dates", "magazine-basic"),
			"desc" => __("Would you like to have dates displayed under your post titles?", "magazine-basic"),
            "type" => "dates"),
			
	array(  "id" => "dates_cats",
			"default" => "on"),
	array(  "id" => "dates_posts",
			"default" => "on"),
			
	array(  "name" => __("Display Authors", "magazine-basic"),
			"desc" => __("Would you like to have the author displayed under your post titles?", "magazine-basic"),
            "type" => "authors"),
			
	array(  "id" => "authors_cats",
			"default" => "on"),
	array(  "id" => "authors_posts",
			"default" => "on"),			

	array(  "name" => __("Number of Posts", "magazine-basic"),
			"desc" => __("How many posts would you like to appear on the front page?", "magazine-basic"),
            "id" => "number_posts",
			"default" => "6",
            "type" => "posts"),

	array(  "name" => __("Excerpt or Content", "magazine-basic"),
			"desc" => __("Do want to display the excerpt or the content on the front page?", "magazine-basic"),
            "id" => "excerpt_content",
			"default" => 1,
            "type" => "exorcon"),

	array(  "name" => __("Excerpt Word Limit", "magazine-basic"),
			"desc" => __("How many words do you want to appear in your front page post excerpts?", "magazine-basic"),
            "type" => "excerpts"),

	array(  "id" => "excerpt_one",
			"default" => "55"),
	array(  "id" => "excerpt_two",
			"default" => "45"),
	array(  "id" => "excerpt_three",
			"default" => "30"),

	array(  "name" => __("Site Description", "magazine-basic"),
			"desc" => __("Add meta tag description (Excerpt used on single posts and pages)", "magazine-basic"),
            "id" => "site_description",
            "type" => "site-description"),

	array(  "name" => __("Keywords", "magazine-basic"),
			"desc" => __("Add meta tag keywords, separate by comma (Tags are used on single posts)", "magazine-basic"),
            "id" => "keywords",
            "type" => "keywords"),
				
	array(  "name" => __("Google Analytics", "magazine-basic"),
			"desc" => __("Add your Google Analytics code", "magazine-basic"),
            "id" => "google_analytics",
            "type" => "google"),
			
	array(  "id" => "header_ad",
			"default" => ""),
	
	array(  "name" => __("Header Ad", "magazine-basic"),
			"desc" => __("Add your 468 x 60 header ad image and link here.", "magazine-basic"),
            "id" => "headerad_img",
            "type" => "header-ad"),			

	array(  "id" => "headerad_link"),
	
	array(  "name" => __('Display "Latest Story"', "magazine-basic"),
			"desc" => __('Would you like to display the "Latest Story" header on the front page?', "magazine-basic"),
            "id" => "latest_story",
			"default" => "on",
            "type" => "latest"),
			
	array(  "name" => __("Display Dates", "magazine-basic"),
			"desc" => __("Would you like to have dates displayed under your post titles?", "magazine-basic"),
			"id" => "dates_index",
			"default" => "on",
			"type" => "dates-index"),																

	array(  "name" => __("Display Authors", "magazine-basic"),
			"desc" => __("Would you like to have author displayed under your post titles?", "magazine-basic"),
			"id" => "authors_index",
			"default" => "on",
			"type" => "authors-index")
);

// setting up the $values variable
$values = get_option(THEME_FILE);
//delete_option(THEME_FILE);

function get_index($array, $index) {
  return isset($array[$index]) ? $array[$index] : null;
}

// CALL THEME OPTIONIS
function theme_option($var) {
	global $values;
	$val = get_index($values,$var);
	return $val;
}

// Set all default options
if(!$values) {
	foreach ($options as $default) {
		if(isset($default['id']) && isset($default['default'])) {
			$setdefaultvalues1[ $default['id'] ] = $default['default'];
		}
	}
	update_option(THEME_FILE, $setdefaultvalues1);
}

// Ajax save function
function save_theme_callback() {
	global $wpdb; // this is how you get access to the database

	$savevalues = array();
	
	$items = explode("&", $_POST['option']);

	foreach ($items as $value) {
		$key_value = explode("=",$value);
		$key = urldecode($key_value[0]);
		$value = urldecode($key_value[1]);
		$savevalues[ $key ] = $value; 
	}
	update_option(THEME_FILE, $savevalues);
	include("admin/css/theme-style.php");
	die();
}
add_action('wp_ajax_save_theme_options', 'save_theme_callback');

function mytheme_add_admin() {
    global $options;

	if(isset($_GET['chmod'])) {
		$path = dirname(__FILE__).'/admin/css/theme-style.css';
		chmod($path, 0666);
		$fileperm = substr(sprintf('%o', fileperms(dirname(__FILE__).'/admin/css/theme-style.css')), -4);
		if($fileperm!=666) {
			header("location: admin.php?page=".THEME_FILE."&setchmod=fail");
			die;
		} else {
			header("location: admin.php?page=".THEME_FILE."&setchmod=success");
			die;
		}
	}

	wp_register_script('effects_js', THEME_URL.'/admin/js/effects.js', array( 'jquery' , 'jquery-ui-core' , 'jquery-ui-tabs' ),'',true);
	
	add_menu_page(THEME_FILE, THEME_NAME, 'manage_options', THEME_FILE, 'pbt_options', THEME_URL.'/admin/images/icon.png');
	$themelayout = add_submenu_page(THEME_FILE, THEME_NAME." - Layout", __("Layout Options", "magazine-basic"), 'manage_options', THEME_FILE, 'pbt_options');
	add_action( "admin_print_scripts-$themelayout", 'pbt_admin_css' );

}
// initialize the theme
add_action('admin_menu', 'mytheme_add_admin'); 

// load the js and css on theme options page
function pbt_admin_css() {
	echo '<link rel="stylesheet" href="'.THEME_URL.'/admin/css/admin-style.css" />'."\n";
	wp_enqueue_script('effects_js');
}

// Setting up the layout options page tabs
function pbt_options() { 
    global $options;
?>
<div id="arturowrap" class="wrap">
    <h2><?php echo THEME_NAME." ".__("Layout Options", "magazine-basic"); ?></h2>
    <?php
	if(get_index($_GET,'setchmod')=="fail") echo '<div id="warning" class="updated fade"><p>Changing permissions failed. Please set manually.</p></div>';
	if(get_index($_GET,'setchmod')=="success") echo '<div id="warning" class="updated fade"><p>Permissions set.</p></div>';
	$fileperm = substr(sprintf('%o', fileperms(dirname(__FILE__).'/admin/css/theme-style.css')), -4);
	if($fileperm!=666) echo '<div id="warning" class="updated fade"><p>Please set the file permissions for <em>admin/css/theme-style.css</em> to 0666 or <strong>'.THEME_NAME.'</strong>  will not function properly. <a href="admin.php?page='.THEME_FILE.'&chmod=true">Set Automatically</a></p></div>';
	?>
    <?php echo '<div id="message" class="updated fade" style="display: none;"><p><strong>'.THEME_NAME.' '.__("Options Saved", "magazine-basic").'</strong></p></div>'."\n"; ?>
    <div id="poststuff" class="metabox-holder has-right-sidebar">
        <div id="side-info-column" class="inner-sidebar thinner">
            <a href="javascript:{}" id="savetheme"></a><div class="ajaxsave"></div>
            <br class="clear" />
         </div>    
    <form method="post" action="" id="themeform" class="themesbybavotasan">
        <div id="post-body" class="has-sidebar">
            <div id="post-body-content" class="has-sidebar-content thinmain">
                <div id='normal-sortables' class='meta-box-sortables'>
                    <div id="wrapper" class="arturo">
                        <div id="tabbed">
                        <ul class="tabs">
						<?php
                        $menuPages = array(
							__('Info', "magazine-basic") =>'pbt_info', 
							__('Main', "magazine-basic") =>'pbt_layout_options', 
							__('Header &amp; Footer', "magazine-basic") =>'pbt_header_options', 
							__('Front Page', "magazine-basic") =>'pbt_frontpage_options', 
							__('Sidebars', "magazine-basic") =>'pbt_sidebars_options', 
							__('SEO', "magazine-basic") =>'pbt_seo_options'
						);
                        $x = 1;
                        foreach($menuPages as $menuPage => $pagefunction) {
                            echo '<li><a href="#tabbed-'.$x.'">'.$menuPage.'</a></li>';
                            $x++;
                        }
                        ?>
                        </ul>
                        </div>
                        <?php
                        $x = 1;
                        foreach($menuPages as $menuPage => $pagefunction) {
                            echo '<div class="tab-content" id="tabbed-'.$x.'">';
                            if($x>1 && $x<7) echo '<p class="openclose"><a href="#" class="openall">'.__("Open All", "magazine-basic").' [+]</a><a href="#" class="closeall">'.__("Close All", "magazine-basic").' [-]</a></p>';
                            $pagefunction();
                            echo '</div>';
                            $x++;
                        }	
                        ?>
                    </div> <!-- end of #wrapper -->
        		</div> <!-- end of #normal-sortables -->
        	</div> <!-- end of #post-body-content -->
        </div> <!-- end of #post-body -->
    </div> <!-- end of #poststuff -->
    </form>
</div> <!-- end of #wrap -->
<?php
}

////////////////////////
//
// Default input boxes
//
///////////////////////


// TEXTAREA
function textAreaBox($rows = 4, $valueName, $valueDesc, $valueID) {
?>
<div class="postbox">
	<div class="handlediv" title="Click to toggle"><br /></div><h3 class='hndle'><span><?php echo $valueName; ?></span><small> - <?php echo $valueDesc; ?></small></h3>
	<div class="inside">
		<textarea name="<?php echo $valueID; ?>" cols="60" rows="<?php echo $rows; ?>"><?php echo stripslashes(theme_option($valueID)); ?></textarea>
		<br class="clear" />
	</div>
</div>
<?php
}

// INPUT TEXT
function textBox($size = 50, $valueName, $valueDesc, $valueID, $label = null, $maxlength = null, $align = null, $color = false) {
?>
<div class="postbox">
    <div class="handlediv" title="Click to toggle"><br /></div><h3 class='hndle'><span><?php echo $valueName; ?></span><small><?php if($valueDesc) echo " - ".$valueDesc; ?></small></h3>
    <div class="inside">
        <input type="text" name="<?php echo $valueID; ?>" size="<?php echo $size; ?>"<?php if($maxlength) echo ' maxlength="'.$maxlength.'"'; ?><?php if($align) echo ' class="'.$align.'"'; ?> value="<?php echo theme_option($valueID); ?>" /><?php if($label) echo '<label style="margin: 9px 0 0 5px;">'.$label.'</label>'; ?>
    <br class="clear" />
    </div>
</div>
<?php
}

// RADIO BUTTON
function radioBox($numof = 2, $valueName, $valueDesc, $valueID, $labels = null, $defaults = null) {
	if(!$labels) $labels = array( __('Yes', "magazine-basic"), __('No', "magazine-basic") );
	if(!$defaults) $defaults = array(1,2);
?>
<div class="postbox">
    <div class="handlediv" title="Click to toggle"><br /></div><h3 class='hndle'><span><?php echo $valueName; ?></span><small> - <?php echo $valueDesc; ?></small></h3>
    <div class="inside">
	<?php 
	$i = 0;
    for($x=1;$x<=$numof;$x++) {
		echo '<input  name="'.$valueID.'" type="radio" value="'.$defaults[$i].'"';
		if(theme_option($valueID) == $defaults[$i]) { echo " checked=\"checked\""; }
        echo ' />&nbsp;<label>'.$labels[$i].'</label>&nbsp;&nbsp;';
    	$i++;
    }
    ?>
    <br class="clear" />
    </div>
</div>
<?php
}

#####################
##  the info page  ##
#####################

function pbt_info() { 
?>
    <img src="<?php echo THEME_URL; ?>/screenshot.png" alt="<?php echo THEME_NAME; ?>" class="theme" width="200" height="150" />
    <?php
    echo '<p><ul><li><strong>'.__('Version', "magazine-basic").':</strong> '.THEME_VERSION.'</li><li><strong>'.__('Author', "magazine-basic").':</strong> <a href="http://bavotasan.com/">'.THEME_AUTHOR.'</a></li><li><strong>'.__('Built by', "magazine-basic").':</strong> <a href="http://rosspfahlerconsulting.com/">Ross Pfahler Consulting</a></li><li><strong>'.__('Theme home page', "magazine-basic").':</strong> <a href="'.THEME_HOMEPAGE.'">'.THEME_NAME.'</a></li></ul></p><div class="clear"></div>';
}

###############################
##  the layout options page  ##
###############################

function pbt_layout_options() {
	global $options;

	foreach ($options as $value) { 
		switch ( get_index($value,'type') ) {
	
			case "site":
				radioBox(2, $value['name'], $value['desc'], $value['id'], array( __('800px', "magazine-basic"), __('1024px', "magazine-basic")), array(800,1024));			
			break;
				
			case "dates":
			?>
			
			<div class="postbox">
				<div class="handlediv" title="Click to toggle"><br /></div><h3 class='hndle'><span><?php echo $value['name']; ?></span><small> - <?php echo $value['desc']; ?></small></h3>
				<div class="inside">
					<input name="dates_cats" type="checkbox" <?php if(theme_option("dates_cats") == "on") { echo " checked=\"checked\""; } ?> />&nbsp;<label><?php _e("Categories, Archives, Search Pages", "magazine-basic"); ?></label>
					&nbsp;&nbsp;<input name="dates_posts" type="checkbox" <?php if(theme_option("dates_posts") == "on") { echo " checked=\"checked\""; } ?> />&nbsp;<label><?php _e("Single Posts", "magazine-basic"); ?></label>
					<br class="clear" />
				</div>
			</div>
			<?php break;
	
			case "authors":
			?>
			
			<div class="postbox">
				<div class="handlediv" title="Click to toggle"><br /></div><h3 class='hndle'><span><?php echo $value['name']; ?></span><small> - <?php echo $value['desc']; ?></small></h3>
				<div class="inside">
					<input name="authors_cats" type="checkbox" <?php if(theme_option("authors_cats") == "on") { echo " checked=\"checked\""; } ?> />&nbsp;<label><?php _e("Categories, Archives, Search Pages", "magazine-basic"); ?></label>
					&nbsp;&nbsp;<input name="authors_posts" type="checkbox" <?php if(theme_option("authors_posts") == "on") { echo " checked=\"checked\""; } ?> />&nbsp;<label><?php _e("Single Posts", "magazine-basic"); ?></label>
				<br class="clear" />
				</div>
			</div>
			<?php break;
		} 
	}
}

###############################
##  the header options page  ##
###############################

function pbt_header_options() {
    global $options;

	foreach ($options as $value) { 
		switch ( get_index($value,'type') ) {
	
			case "logo":
			?>
			<div class="postbox">
				<div class="handlediv" title="Click to toggle"><br /></div><h3 class='hndle'><span><?php echo $value['name']; ?></span><small> - <?php echo $value['desc']; ?></small></h3>
				<div class="inside">
					<input type="text" size="50" name="<?php echo $value['id']; ?>" value="<?php echo theme_option($value['id']); ?>" />
					<?php 
					echo '<div class="headerlogo"></div>';
					?> 
				<br class="clear" />
				</div>
			</div>
			<?php
			break;
			
			case "logo-location":
			?>
			<div class="postbox">
				<div class="handlediv" title="Click to toggle"><br /></div><h3 class='hndle'><span><?php echo $value['name']; ?></span><small> - <?php echo $value['desc']; ?></small></h3>
				<div class="inside">
					<table>
						<tr>
							<td style="padding-right: 15px;">
								<img src="<?php echo THEME_URL; ?>/admin/images/logoleft.png" alt="" />
							</td>
							<td style="padding-right: 15px;">
								<img src="<?php echo THEME_URL; ?>/admin/images/logoright.png" alt="" />
							</td>
							<td style="padding-right: 15px;">
								<img src="<?php echo THEME_URL; ?>/admin/images/logomiddle.png" alt="" />
							</td>
						</tr>
						<tr>
							<td align="center" style="padding-right: 15px;">
								<input  name="<?php echo $value['id']; ?>" type="radio" value="fl"<?php if(theme_option($value['id']) == "fl") { echo " checked=\"checked\""; } ?> />
							</td>
							<td align="center" style="padding-right: 15px;">
								<input  name="<?php echo $value['id']; ?>" type="radio" value="fr"<?php if(theme_option($value['id']) == "fr") { echo " checked=\"checked\""; } ?> />
							</td>
							<td align="center" style="padding-right: 15px;">
								<input  name="<?php echo $value['id']; ?>" type="radio" value="aligncenter"<?php if(theme_option($value['id']) == "aligncenter") { echo " checked=\"checked\""; } ?> />
							</td>
						</tr>
					</table>
					<br class="clear" />
					</div>
			 </div>
			<?php break;			

			case "login":
				radioBox(2, $value['name'], $value['desc'], $value['id']);
			break;

			case "header-ad":
			?>
			<div class="postbox">
				<div class="handlediv" title="Click to toggle"><br /></div><h3 class='hndle'><span><?php echo $value['name']; ?></span><small> - <?php echo $value['desc']; ?></small></h3>
				<div class="inside">
					<span id="searchHeader"><input type="text" name="<?php echo $value['id']; ?>" size="50" value="<?php echo theme_option($value['id']); ?>" /><label style="padding-top: 5px;">&nbsp;&laquo;&nbsp;<?php _e('Path to Ad Image', "magazine-basic"); ?></label>
					<br style="clear:both;" />
					<input type="text" name="headerad_link" size="50" value="<?php echo theme_option('headerad_link'); ?>" /><label style="padding-top: 5px;">&nbsp;&laquo;&nbsp;<?php _e('Click-through Link', "magazine-basic"); ?></label>
					<br style="clear:both;" />
					<input  name="header_ad" type="checkbox" <?php if(theme_option("header_ad")=="on") { echo ' checked="checked"'; } ?> />&nbsp;<label><?php _e('Display Header Ad', "magazine-basic"); ?></label>
	</span>
					<br class="clear" />
				</div>
			</div>
			<?php break;	
					
		}
	}	
}

##########################################
## Display the front page options page ###
##########################################

function pbt_frontpage_options() {
    global $options;

	foreach ($options as $value) { 
		switch ( get_index($value,'type') ) {
	
			case "homepage-highlight":
				textBox(4, $value['name'], $value['desc'], $value['id'], '', 4, 'center');		
			break;
	
			case "posts":
				textBox(2, $value['name'], $value['desc'], $value['id'], '', 2, 'center');			
			break;
			
			case "exorcon":
				radioBox(2, $value['name'], $value['desc'], $value['id'], array( __('Excerpt', "magazine-basic"), __('Content', "magazine-basic")));			
			break;	
	
			case "excerpts":
			?>
			<div class="postbox">
				<div class="handlediv" title="Click to toggle"><br /></div><h3 class='hndle'><span><?php echo $value['name']; ?></span><small> - <?php echo $value['desc']; ?></small></h3>
				<div class="inside">
					<table class="rows">
					<tr>
					<th><label><?php _e('Row', "magazine-basic"); ?> 1:</label></th>
					<th><label><?php _e('Row', "magazine-basic"); ?> 2:</label></th>               
					<th><label><?php _e('Row', "magazine-basic"); ?> 3+:</label></th>
					</tr>	
					<tr>
					<td><input  name="excerpt_one" size="3" type="text" value="<?php echo theme_option('excerpt_one'); ?>" /></td>
					<td><input  name="excerpt_two" size="3" type="text" value="<?php echo theme_option('excerpt_two'); ?>" /></td>
					<td><input  name="excerpt_three" size="3" type="text" value="<?php echo theme_option('excerpt_three'); ?>" /></td>
					</tr>
					</table>

					<br class="clear" />
				</div>
			</div>
			<?php
			break;	
			
			case "latest":
			?>
			<div class="postbox">
				<div class="handlediv" title="Click to toggle"><br /></div><h3 class='hndle'><span><?php echo $value['name']; ?></span><small> - <?php echo $value['desc']; ?></small></h3>
				<div class="inside">
					<input  name="<?php echo $value['id']; ?>" type="checkbox"<?php if(theme_option($value['id']) == "on") { echo ' checked="checked"'; } ?> />&nbsp;<label><?php _e('Display "Latest Story"', "magazine-basic"); ?></label>            
					<br class="clear" />
				</div>
			</div>
			<?php
			break;			

			case "dates-index":
			?>
			
			<div class="postbox">
				<div class="handlediv" title="Click to toggle"><br /></div><h3 class='hndle'><span><?php echo $value['name']; ?></span><small> - <?php echo $value['desc']; ?></small></h3>
				<div class="inside">
					<input name="<?php echo $value['id']; ?>" type="checkbox" <?php if(theme_option($value['id']) == "on") { echo " checked=\"checked\""; } ?> />&nbsp;<label><?php _e("Front Page", "magazine-basic"); ?></label>
					<br class="clear" />
				</div>
			</div>
			<?php break;
	
			case "authors-index":
			?>
			
			<div class="postbox">
				<div class="handlediv" title="Click to toggle"><br /></div><h3 class='hndle'><span><?php echo $value['name']; ?></span><small> - <?php echo $value['desc']; ?></small></h3>
				<div class="inside">
					<input name="<?php echo $value['id']; ?>" type="checkbox" <?php if(theme_option($value['id']) == "on") { echo " checked=\"checked\""; } ?> />&nbsp;<label><?php _e("Front Page", "magazine-basic"); ?></label>
				<br class="clear" />
				</div>
			</div>
			<?php break;
	
		}
	}
}


#################################
##  the sidebars options page  ##
#################################

function pbt_sidebars_options() {
	global $options;

	foreach ($options as $value) { 
		switch ( get_index($value,'type') ) {
				
case "first-sidebar":
	radioBox(2, $value['name'], $value['desc'], $value['id'], array(__("180px", "magazine-basic"), __("300px", "magazine-basic")), array(180,300));			
break;
   
case "second-sidebar":
	radioBox(3, $value['name'], $value['desc'], $value['id'], array(__("180px", "magazine-basic"), __("300px", "magazine-basic"), __("None", "magazine-basic")), array(180,300,0));			
break;			   
			   
			case "location":
			?>
			<div class="postbox">
				<div class="handlediv" title="Click to toggle"><br /></div><h3 class='hndle'><span><?php echo $value['name']; ?></span><small> - <?php echo $value['desc']; ?></small></h3>
				<div class="inside">
					<div id="oneSidebar">
                        <table>
                            <tr>
                                <td style="padding-right: 15px;">
                                    <img src="<?php echo THEME_URL; ?>/admin/images/oneleft.png" alt="One Left" />
                                </td>
                                <td style="padding-right: 15px;">
                                    <img src="<?php echo THEME_URL; ?>/admin/images/oneright.png" alt="One Right" />
                                </td>
                            </tr>
                            <tr>
                                <td align="center" style="padding-right: 15px;">
                                    <input  name="<?php echo $value['id']; ?>" type="radio" value="1"<?php if(theme_option($value['id']) == "1") { echo " checked=\"checked\""; } ?> />
                                </td>
                                <td align="center" style="padding-right: 15px;">
                                    <input  name="<?php echo $value['id']; ?>" type="radio" value="2"<?php if(theme_option($value['id']) == "2") { echo " checked=\"checked\""; } ?> />
                                </td>
                            </tr>
                        </table>
					</div>
					<div id="twoSidebar">
                        <table>
                            <tr>
                                <td style="padding-right: 15px;">
                                    <img src="<?php echo THEME_URL; ?>/admin/images/twoleft.png" alt="" />
                                </td>
                                <td style="padding-right: 15px;">
                                    <img src="<?php echo THEME_URL; ?>/admin/images/tworight.png" alt="" />
                                </td>
                                <td style="padding-right: 15px;">
                                    <img src="<?php echo THEME_URL; ?>/admin/images/twoseparate.png" alt="" />
                                </td>
                            </tr>
                            <tr>
                                <td align="center" style="padding-right: 15px;">
                                    <input  name="<?php echo $value['id']; ?>" type="radio" value="3"<?php if(theme_option($value['id']) == "3") { echo ' checked="checked"'; } ?> />
                                </td>
                                <td align="center" style="padding-right: 15px;">
                                    <input  name="<?php echo $value['id']; ?>" type="radio" value="4"<?php if(theme_option($value['id']) == "4") { echo ' checked="checked"'; } ?> />
                                </td>
                                <td align="center" style="padding-right: 15px;">
                                    <input  name="<?php echo $value['id']; ?>" type="radio" value="5"<?php if(theme_option($value['id']) == "5") { echo ' checked="checked"'; } ?> />
                                </td>
                            </tr>
                        </table>
                    </div>
                    <p class="locerror"></p>
                    <br class="clear" />
				</div>
			</div>
			<?php break;					
		} 
	}
}

############################
##  the seo options page  ##
############################

function pbt_seo_options() {
    global $options;

	foreach ($options as $value) { 
		switch ( get_index($value,'type') ) {
	
			case "site-description":
				textAreaBox(4, $value['name'], $value['desc'], $value['id']);
			break;
	
			case "keywords":
				textAreaBox(4, $value['name'], $value['desc'], $value['id']);
			break;
	
			case "google":
				textAreaBox(6, $value['name'], $value['desc'], $value['id']);
			break;
		}
	}
}

//remove some defaults
function unregister_default_widgets() {
	unregister_widget('WP_Widget_Recent_Posts');
	unregister_widget('WP_Widget_Recent_Comments');
}
add_action('widgets_init', 'unregister_default_widgets');

// include the widgets
include(TEMPLATEPATH.'/widget-ad.php'); 
include(TEMPLATEPATH.'/widget-ad-2.php'); 
include(TEMPLATEPATH.'/widget-ad-3.php'); 
include(TEMPLATEPATH.'/widget-ad-4.php');
include(TEMPLATEPATH.'/widget-contribute.php'); 
include(TEMPLATEPATH.'/widget-learn.php'); 
include(TEMPLATEPATH.'/widget-quote.php'); 
include(TEMPLATEPATH.'/widget-donate.php'); 
include(TEMPLATEPATH.'/widget-popular.php'); 
include(TEMPLATEPATH.'/widget-subdonate.php'); 
include(TEMPLATEPATH.'/widget-recent-posts.php'); 
include(TEMPLATEPATH.'/widget-recent-comments.php'); 
include(TEMPLATEPATH.'/widget-picture.php'); 
include(TEMPLATEPATH.'/widget-newsletter.php');


// Initiating the sidebars
if (function_exists("register_sidebar")) {
register_sidebar(array(
	'name' => 'Home Right Col',
	'id' => 'home',
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '',
	'after_title' => ''
));

register_sidebar(array(
	'name' => 'Home Left Col',
	'id' => 'home-left-col',
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '',
	'after_title' => ''
));

register_sidebar(array(
	'name' => 'Inner Pages',
	'id' => 'inner-pages',
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '',
	'after_title' => ''
	));

register_sidebar(array(
	'name' => 'Author Directory',
	'id' => 'directory',
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '',
	'after_title' => ''
));
	
register_sidebar(array(
	'name' => 'Super Wide Ad',
	'id' => 'super-wide-ad',
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '',
	'after_title' => ''
));

register_sidebar(array(
	'name' => 'Trifecta Footer Widgets',
	'id' => 'trifecta-footer-widgets',
	'before_widget' => '',
	'after_widget' => '',
	'before_title' => '',
	'after_title' => ''
));
}

// Tags for keywords
function csv_tags() {
    $posttags = get_the_tags();
 	$csv_tags = '';
    if($posttags) {
		foreach((array)$posttags as $tag) {
			$csv_tags .= $tag->name . ',';
		}
	}
    echo '<meta name="keywords" content="'.$csv_tags.theme_option('keywords').'" />';
}

// Theme excerpts
function theme_excerpt($num, $readmore = true) {
	if($readmore) {
		$link = '<br /><a href="'.get_permalink().'" class="more-link">'.__("Read more &raquo;", "magazine-basic").'</a>';
	}
	
	$limit = $num;
	if(!$limit) $limit = 55;
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt)>=$limit) {
		array_pop($excerpt);
		$excerpt = implode(" ",$excerpt).'...'.$link;
	} else {
		$excerpt = implode(" ",$excerpt).$link;
	}	
	$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
	echo '<p>'.$excerpt.'</p>';
}

// Theme contents
function theme_content($readmore) {
	$content = get_the_content($readmore);
	$content = preg_replace("/<img[^>]+\>/i", "", $content); 
	$content = preg_replace('/\[.+\]/','', $content);
	$content = apply_filters('the_content', $content);
	$content = str_replace(']]>', ']]&gt;', $content);
	echo $content;
}

// Meta description
function metaDesc() {
	$content = strip_tags(get_the_content());
	if($content) {
		$content = preg_replace('/\[.+\]/','', $content);
		$content = ereg_replace("[\n\r]", "\t", $content);
		$content = ereg_replace("\t\t+", " ", $content);
		$content = htmlentities($content);
	} else {
		$content = htmlentities(theme_option('site_description'));
	}
	if (strlen($content) < 155) {
		echo $content;
	} else {
		$desc = substr($content,0,155);
		echo $desc."...";
	}
}

// image grabber function
function resize($w,$h,$class='alignleft',$showlink=true) {
	global $more, $post;
	$title = the_title_attribute('echo=0');
	if($showlink) {
		$link = "<a href='".get_permalink()."' title='$title'>";
		$linkend = "</a>";
	} else {
		$link ="";
		$linkend="";
	}
	$more = 1;
	$content = get_the_content();
	$pattern = '/<img[^>]+src[\\s=\'"]';
	$pattern .= '+([^"\'>\\s]+)/is';
	$more = 0;
	if(preg_match($pattern,$content,$match)) {
		$theImage =  "$link<img src=\"$match[1]\" class=\"$class\" alt=\"$title\" width=\"$w\" height=\"$h\" />$linkend\n\n";
		return $theImage;
	}
}

// Comments
function mytheme_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
	<div id="comment-<?php comment_ID(); ?>">
        <div class="comment-avatar">
        	<?php echo get_avatar( $comment, 40 ); ?>
        </div>     
        <div class="comment-author">
        	<?php echo get_comment_author_link()." ";
        	printf(__('on %1$s at %2$s', "magazine-basic"), get_comment_date(),get_comment_time()); 
			edit_comment_link(__('(Edit)', "magazine-basic"),'  ','');
			?>
        </div>
        <div class="comment-text">
	        <?php if ($comment->comment_approved == '0') { _e('<em>Your comment is awaiting moderation.</em>', "magazine-basic"); } ?>
        	<?php comment_text() ?>
        </div>
        <?php if($args['max_depth']!=$depth && comments_open()) { ?>
        <div class="reply">
        	<?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
        </div>
        <?php } ?>
	</div>
<?php
}

### Function: Page Navigation: Boxed Style Paging
function pagination($before = '', $after = '') {
	global $wpdb, $wp_query;
	$pagenavi_options = array();
	$pagenavi_options['pages_text'] = __('Page %CURRENT_PAGE% of %TOTAL_PAGES%',"magazine-basic");
	$pagenavi_options['current_text'] = '%PAGE_NUMBER%';
	$pagenavi_options['page_text'] = '%PAGE_NUMBER%';
	$pagenavi_options['first_text'] = __('First Page',"magazine-basic");
	$pagenavi_options['last_text'] = __('Last Page',"magazine-basic");
	$pagenavi_options['next_text'] = '&raquo;';
	$pagenavi_options['prev_text'] = '&laquo;';
	$pagenavi_options['dotright_text'] = '...';
	$pagenavi_options['dotleft_text'] = '...';
	$pagenavi_options['num_pages'] = 5;
	$pagenavi_options['always_show'] = 0;
	$pagenavi_options['num_larger_page_numbers'] = 0;
	$pagenavi_options['larger_page_numbers_multiple'] = 5;
	if (!is_single()) {
		$request = $wp_query->request;
		$posts_per_page = intval(get_query_var('posts_per_page'));
		$paged = intval(get_query_var('paged'));
		$numposts = $wp_query->found_posts;
		$max_page = $wp_query->max_num_pages;
		if(empty($paged) || $paged == 0) {
			$paged = 1;
		}
		$pages_to_show = intval($pagenavi_options['num_pages']);
		$larger_page_to_show = intval($pagenavi_options['num_larger_page_numbers']);
		$larger_page_multiple = intval($pagenavi_options['larger_page_numbers_multiple']);
		$pages_to_show_minus_1 = $pages_to_show - 1;
		$half_page_start = floor($pages_to_show_minus_1/2);
		$half_page_end = ceil($pages_to_show_minus_1/2);
		$start_page = $paged - $half_page_start;
		if($start_page <= 0) {
			$start_page = 1;
		}
		$end_page = $paged + $half_page_end;
		if(($end_page - $start_page) != $pages_to_show_minus_1) {
			$end_page = $start_page + $pages_to_show_minus_1;
		}
		if($end_page > $max_page) {
			$start_page = $max_page - $pages_to_show_minus_1;
			$end_page = $max_page;
		}
		if($start_page <= 0) {
			$start_page = 1;
		}
		$larger_per_page = $larger_page_to_show*$larger_page_multiple;
		$larger_start_page_start = (n_round($start_page, 10) + $larger_page_multiple) - $larger_per_page;
		$larger_start_page_end = n_round($start_page, 10) + $larger_page_multiple;
		$larger_end_page_start = n_round($end_page, 10) + $larger_page_multiple;
		$larger_end_page_end = n_round($end_page, 10) + ($larger_per_page);
		if($larger_start_page_end - $larger_page_multiple == $start_page) {
			$larger_start_page_start = $larger_start_page_start - $larger_page_multiple;
			$larger_start_page_end = $larger_start_page_end - $larger_page_multiple;
		}
		if($larger_start_page_start <= 0) {
			$larger_start_page_start = $larger_page_multiple;
		}
		if($larger_start_page_end > $max_page) {
			$larger_start_page_end = $max_page;
		}
		if($larger_end_page_end > $max_page) {
			$larger_end_page_end = $max_page;
		}
		if($max_page > 1 || intval($pagenavi_options['always_show']) == 1) {
			$pages_text = str_replace("%CURRENT_PAGE%", number_format_i18n($paged), $pagenavi_options['pages_text']);
			$pages_text = str_replace("%TOTAL_PAGES%", number_format_i18n($max_page), $pages_text);
			echo $before.'<div class="pagination">'."\n";
			if(!empty($pages_text)) {
				echo '<span class="pages">'.$pages_text.'</span>';
			}
			previous_posts_link($pagenavi_options['prev_text']);
			if ($start_page >= 2 && $pages_to_show < $max_page) {
				$first_page_text = str_replace("%TOTAL_PAGES%", number_format_i18n($max_page), $pagenavi_options['first_text']);
				echo '<a href="'.esc_url(get_pagenum_link()).'" class="first" title="'.$first_page_text.'">1</a>';
				if(!empty($pagenavi_options['dotleft_text'])) {
					echo '<span class="extend">'.$pagenavi_options['dotleft_text'].'</span>';
				}
			}
			if($larger_page_to_show > 0 && $larger_start_page_start > 0 && $larger_start_page_end <= $max_page) {
				for($i = $larger_start_page_start; $i < $larger_start_page_end; $i+=$larger_page_multiple) {
					$page_text = str_replace("%PAGE_NUMBER%", number_format_i18n($i), $pagenavi_options['page_text']);
					echo '<a href="'.esc_url(get_pagenum_link($i)).'" class="page" title="'.$page_text.'">'.$page_text.'</a>';
				}
			}
			for($i = $start_page; $i  <= $end_page; $i++) {						
				if($i == $paged) {
					$current_page_text = str_replace("%PAGE_NUMBER%", number_format_i18n($i), $pagenavi_options['current_text']);
					echo '<span class="current">'.$current_page_text.'</span>';
				} else {
					$page_text = str_replace("%PAGE_NUMBER%", number_format_i18n($i), $pagenavi_options['page_text']);
					echo '<a href="'.esc_url(get_pagenum_link($i)).'" class="page" title="'.$page_text.'">'.$page_text.'</a>';
				}
			}
			if ($end_page < $max_page) {
				if(!empty($pagenavi_options['dotright_text'])) {
					echo '<span class="extend">'.$pagenavi_options['dotright_text'].'</span>';
				}
				$last_page_text = str_replace("%TOTAL_PAGES%", number_format_i18n($max_page), $pagenavi_options['last_text']);
				echo '<a href="'.esc_url(get_pagenum_link($max_page)).'" class="last" title="'.$last_page_text.'">'.$max_page.'</a>';
			}
			next_posts_link($pagenavi_options['next_text'], $max_page);
			if($larger_page_to_show > 0 && $larger_end_page_start < $max_page) {
				for($i = $larger_end_page_start; $i <= $larger_end_page_end; $i+=$larger_page_multiple) {
					$page_text = str_replace("%PAGE_NUMBER%", number_format_i18n($i), $pagenavi_options['page_text']);
					echo '<a href="'.esc_url(get_pagenum_link($i)).'" class="page" title="'.$page_text.'">'.$page_text.'</a>';
				}
					}

			echo '</div>'.$after."\n";
		}
	}
}

### Function: Round To The Nearest Value
function n_round($num, $tonearest) {
   return floor($num/$tonearest)*$tonearest;
}

function new_excerpt_length($length) {
	return 200;
}
add_filter('excerpt_length', 'new_excerpt_length');

function short_title($after = '', $length) {
	$mytitle = explode(' ', get_the_title(), $length);
	if (count($mytitle)>=$length) {
		array_pop($mytitle);
		$mytitle = implode(" ",$mytitle). $after;
	} else {
		$mytitle = implode(" ",$mytitle);
	}
	echo $mytitle;
}
// This theme allows users to set a custom background
if(function_exists('add_custom_background')) add_custom_background();

// This theme uses wp_nav_menu()
if(function_exists('register_nav_menu')) {
	add_theme_support( 'nav-menus' );
	register_nav_menu('main', 'Main Navigation Menu');
	register_nav_menu('sub', 'Sub-Navitation Menu');
}

add_theme_support( 'automatic-feed-links' );

function display_none() {

}

function display_home() {
	echo '<div class="main-navigation"><ul class="sf-menu"><li><a href="'.get_bloginfo('url').'">Home</a></li>';
	wp_list_categories('title_li=&depth=1&number=5');
	echo '</ul></div>';
}


/* thumbnails */

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 83, 83, true );
add_image_size( 'highlight-image', 343, 254, true );
add_image_size( 'category-image', 300, 200, true );

/* extra user information */

add_action( 'show_user_profile', 'extra_user_profile_fields' );
add_action( 'edit_user_profile', 'extra_user_profile_fields' );
 
function extra_user_profile_fields( $user ) { ?>
<h3><?php _e("Extra profile information", "blank"); ?></h3>

<table class="form-table">
    <tr>
        <th><label for="smallbio"><?php _e("Small Bio"); ?></label></th>
        <td>
        <input type="text" name="smallbio" id="smallbio" value="<?php echo esc_attr( get_the_author_meta( 'smallbio', $user->ID ) ); ?>" class="regular-text" /><br />
        <span class="description"><?php _e("This holds the small bio for homepage and other pages"); ?></span>
        </td>
    </tr>
    <tr>
        <th><label for="feedburneremaillink"><?php _e("Feedburner Email Publish Link"); ?></label></th>
        <td>
        <input type="text" name="feedburneremaillink" id="feedburneremaillink" value="<?php echo get_the_author_meta( 'feedburneremaillink', $user->ID ); ?>" class="regular-text" /><br />
        <span class="description"><?php _e("This holds a link so that people can subscribe by email to your posts"); ?></span>
        </td>
    </tr>    
    <tr>
        <th><label for="twitter"><?php _e("Twitter"); ?></label></th>
        <td>
        <input type="text" name="twitter" id="twitter" value="<?php echo esc_attr( get_the_author_meta( 'twitter', $user->ID ) ); ?>" class="regular-text" /><br />
        <span class="description"><?php _e("Twitter URL"); ?></span>
        </td>
    </tr>
    <tr>
        <th><label for="facebook"><?php _e("Facebook"); ?></label></th>
        <td>
        <input type="text" name="facebook" id="facebook" value="<?php echo esc_attr( get_the_author_meta( 'province', $user->ID ) ); ?>" class="regular-text" /><br />
        <span class="description"><?php _e("Facebook URL"); ?></span>
        </td>
    </tr>
</table>
<?php }
 
add_action( 'personal_options_update', 'save_extra_user_profile_fields' );
add_action( 'edit_user_profile_update', 'save_extra_user_profile_fields' );
 
function save_extra_user_profile_fields( $user_id ) {
 
if ( !current_user_can( 'edit_user', $user_id ) ) { return false; }
 
update_usermeta( $user_id, 'smallbio', $_POST['smallbio'] );
update_usermeta( $user_id, 'feedburneremaillink', $_POST['feedburneremaillink'] );
update_usermeta( $user_id, 'twitter', $_POST['twitter'] );
update_usermeta( $user_id, 'facebook', $_POST['facebook'] );

}

//users can only view their posts
function view_my_posts( $wp_query ) {
    if ( strpos( $_SERVER[ 'REQUEST_URI' ], '/wp-admin/edit.php' ) !== false ) {
        if ( !current_user_can( 'level_10' ) ) {
            global $current_user;
            $wp_query->set( 'author', $current_user->id );
        }
    }
}

add_filter('parse_query', 'view_my_posts' );

//remove some of the backend stuff
function remove_dashboard_widgets(){
  global$wp_meta_boxes;
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
 // unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']); 
}

add_action('wp_dashboard_setup', 'remove_dashboard_widgets');

//remove some menu items for non-admins

function remove_menu_items() {
	 if ( !current_user_can( 'level_10' ) ) {
	  global $menu;
	  $restricted = array(__('Tools'), __('Comments'), __('Media'));
	  end ($menu);
	  while (prev($menu)){
		$value = explode(' ',$menu[key($menu)][0]);
		if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){
		  unset($menu[key($menu)]);}
		}
	 }
  }

add_action('admin_menu', 'remove_menu_items');

//remove some unneeded post items for non-admins
function customize_meta_boxes() {
	if ( !current_user_can( 'level_10' ) ) {
	  /* Removes meta boxes from Posts */
	  remove_meta_box('postcustom','post','normal');
	  remove_meta_box('trackbacksdiv','post','normal');
	  remove_meta_box('commentstatusdiv','post','normal');
	  remove_meta_box('commentsdiv','post','normal');
	  remove_meta_box('tagsdiv-post_tag','post','normal');
	  remove_meta_box('postexcerpt','post','normal');
	  /* Removes meta boxes from pages */
	  remove_meta_box('postcustom','page','normal');
	  remove_meta_box('trackbacksdiv','page','normal');
	  remove_meta_box('commentstatusdiv','page','normal');
	  remove_meta_box('commentsdiv','page','normal'); 
	}
}

add_action('admin_init','customize_meta_boxes');

///////////////////////////////
//----gallery post types --- //
///////////////////////////////
/*
register_post_type('gallery', array(
	'label' => __('Galleries'),
	'singular_label' => __('Gallery'),
	'public' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'_builtin' => false,
    	'_edit_link' => 'post.php?post=%d',
	'rewrite' => false,
	'query_var' => false,
	'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes'),
	'taxonomies' => array('category', 'post_tag')
));


add_action("template_redirect", 'my_template_redirect');

function my_template_redirect()
{
	global $wp;
	global $wp_query;
	if ($wp->query_vars["post_type"] == "gallery")
	{
		//display the gallery template
		if (have_posts())
		{
			include(TEMPLATEPATH . '/gallery.php');
			die();
		}
		else
		{
			$wp_query->is_404 = true;
		}
	}
}
*/

//email author that their post was published
function publish_email($post_id) {
	global $wpdb;

	$post = $wpdb->get_results( 
	"SELECT p.post_date, p.post_title, p.post_name, u.user_email, u.display_name, u.user_nicename, 
			(SELECT um.meta_value FROM $wpdb->usermeta um WHERE um.meta_key = 'first_name' and um.user_id = p.post_author) as 'first_name', 
			(SELECT um.meta_value FROM $wpdb->usermeta um WHERE um.meta_key = 'last_name' and um.user_id = p.post_author) as 'last_name',
			(SELECT um.meta_value FROM $wpdb->usermeta um WHERE um.meta_key = 'twitter' and um.user_id = p.post_author) as 'twitter',
			(SELECT um.meta_value FROM $wpdb->usermeta um WHERE um.meta_key = 'facebook' and um.user_id = p.post_author) as 'facebook'
	FROM $wpdb->posts p, $wpdb->users u
	WHERE u.ID = p.post_author AND p.ID = " . $post_ID );	
	
	$mailbody = '
	Default Post Published Letter:\n\n
	
	Dear ' . $post->first_name . ' ' . $post->last_name . ',\n\n
	
	Thank you so much for sharing your work on TheInertia.com. We just published your piece, and it can be found here: \n\n
	
	' . get_bloginfo('url') . '/' . $post->post_name . '\n\n
	
	It\'s also permanently listed in your author archive:\n\n
	
	' . get_bloginfo('url') . '/' . 'author/' . $post->user_nicename . '\n\n
	
	In order to maximize the reach of your contribution, you can attract significant traffic to your work in the following ways:\n\n
	
	1.  Facebook/Twitter: Share a link to your post via Facebook and/or Twitter.\n\n ';
	
	if ( $post->facebook) {
		$mailbody .= 'Facebook Link: ' . $post->facebook . '\n\n';
	}
	
	if ( $post->Twitter) {
		$mailbody .= 'Twitter Link: ' . $post->twitter . '\n\n';
	}
	
	$mailbody .= '
	2.  Email/IM/iChat: Distribute a note with a link to your post to friends and coworkers and encourage them to comment and share the link. Put the link as your "away" message on IM.\n\n
	
	3. Respond to Comments: Responding to comments on your post encourages productive discussion and attracts an audience.\n\n
	
	Thanks again for sharing your work on TheInertia.com. We strive to make TheInertia.com a safe place for the global surf community\'s most prominent and thoughtful figures to share great ideas, and contributors like you make it a reality.\n\n
	
	Sincerely,\n\n
	
	TheInertia.com Staff\n\n
	
	Think. Share. Evolve.';
	
	//send the email
	mail($post->user_mail, 'TheInertia.com: Your latest piece was just published', $mailbody);
	
}

add_action("publish_post", "publish_email");

?>
