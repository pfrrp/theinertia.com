<?php
class widget_contribute extends WP_Widget {
	
	function widget_contribute() {
		$widget_ops = array('classname' => 'widget_contribute', 'description' => __( 'Contribute Widget') );
		$this->WP_Widget('contribute', __('Contribute'), $widget_ops);	
	}
	
	function widget($args, $instance) {
		extract($args); 
		
		echo $before_widget;
		?>
	<div id="cJoinTop" class="gradientBorderN">
		<div id="cJoinTopInner">
			<span class="lrgBlue">
				<a href="/contribute" title="Contribute">CONTRIBUTE*</a>
			</span>
	
			<strong>
				Join the planet's largest network of thinking surfers.
			</strong>
		</div>
	</div>
	
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

register_widget('widget_contribute');
?>