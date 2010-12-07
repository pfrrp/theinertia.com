<?php
class widget_donate extends WP_Widget {
	
	function widget_donate() {
		$widget_ops = array('classname' => 'widget_donate', 'description' => __( 'Donate Widget') );
		$this->WP_Widget('donate', __('Donate'), $widget_ops);	
	}
	
	function widget($args, $instance) {
		extract($args); 
		
		echo $before_widget;
		?>
	<div id="cJoinBottom" class="gradientBorderN">
	
		<div id="cJoinBottomInner">
			<span class="lrgBlueAlt">
				<a href="/donate" title="Donate">DONATE*</a>
			</span>
	
			<strong>
				20% goes to a charity of your choice
			</strong>
		</div>
	</div>
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

register_widget('widget_donate');
?>