<?php
class widget_advertisement_hp extends WP_Widget {
	function widget_advertisement_hp() {
		$widget_ops = array('classname' => 'widget_advertisement_hp', 'description' => __( 'An advertisment widget (300x250 hp)') );
		$this->WP_Widget('advertisement_hp', __('Advertisement HP'), $widget_ops);	
	}
	
    function widget($args, $instance ) {
		extract($args);
		$title = apply_filters('widget_title', $instance['title'], $instance, $this->id_base);
		$b = $instance['border'] ? '1' : '0';

		echo $before_widget;
		if ( $title )
			echo $before_title . $title . $after_title;
		if ($b == 1) {	?>
        <div class="cAd gradientBorderN">
        <?php }	?>
        	<div class="ad cAdInner">
				<script type="text/javascript">
				/* <![CDATA[ */
				<?php if (is_home() || is_page('home')) { ?>
					GA_googleFillSlot("300x250_Inertia_Homepage_Bottom_Center");
				<?php } ?>
				/* ]]> */
                </script>       
            </div>
        <?php if ($b == 1) { ?>
        <div class="clear"></div></div>  
        <?php
		}
		echo $after_widget;
    }
	
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$new_instance = wp_parse_args((array) $new_instance, array( 'title' => '', 'border' => 0));
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['border'] = $new_instance['border'] ? 1 : 0;
		return $instance;		
	}
	
    function form($instance)
    {
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'border' => 0) );
		$title = $instance['title'];
		$border = $instance['border'] ? 'checked="checked"' : '';
?>
		<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></label></p>
        <p>
			<input class="checkbox" type="checkbox" <?php echo $border; ?> id="<?php echo $this->get_field_id('border'); ?>" name="<?php echo $this->get_field_name('border'); ?>" /> <label for="<?php echo $this->get_field_id('border'); ?>"><?php _e('Border'); ?></label>
            </p>        
<?php
    }
}

register_widget('widget_advertisement_hp');
?>