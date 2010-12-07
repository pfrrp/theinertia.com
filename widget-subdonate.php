<?php
class widget_subdonate extends WP_Widget {
	function widget_subdonate() {
		$widget_ops = array('classname' => 'widget_subdonate', 'description' => __( '300x250 image thingy') );
		$this->WP_Widget('contributedonate', __('Contribute Donate Ad'), $widget_ops);	
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
				<img src="/wp-content/themes/theinertia/images/contribdonatead5.jpg" />      
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

register_widget('widget_subdonate');
?>