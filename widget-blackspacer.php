<?php
class widget_black_spacer extends WP_Widget {
	
	function widget_black_spacer() {
		$widget_ops = array('classname' => 'widget_black_spacer', 'description' => __( 'BlackSpacer Widget') );
		$this->WP_Widget('black_spacer', __('BlackSpacer'), $widget_ops);	
	}
	
	function widget($args, $instance) {
		extract($args); 
		
		echo $before_widget;
		?>
        
		<div class="blackSpacerSmall"></div>
	
	<?php
		echo $after_widget;
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$new_instance = wp_parse_args((array) $new_instance, array( 'title' => ''));
		$instance['title'] = strip_tags($new_instance['title']);
		return $instance;		
	}
	
    function form($instance)
    {
		$instance = wp_parse_args( (array) $instance, array( 'title' => '') );
		$title = $instance['title'];
?>
		<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></label></p>
        <p>   
<?php
    }
}
//register_widget('widget_black_spacer');?>    