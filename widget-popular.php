<?php
class widget_popular extends WP_Widget {
	
	function widget_popular() {
		$widget_ops = array('classname' => 'widget_popular', 'description' => __( 'popular Widget') );
		$this->WP_Widget('popular', __('popular'), $widget_ops);	
	}
	
	function widget($args, $instance) {
		extract($args); 
		$title = empty( $instance['title'] ) ? '' : $instance['title'];
		echo $before_widget;
		?>
        
		<?php if (function_exists('get_most_viewed')): ?>
        <div id="cLowerLeftCol" class="gradientBorderW">
            <div id="cLowerLeftColInner">
              <h5 class="dialogTitleLg"><?php echo $title ?></h5>
              <ol id="mostPopular">
                  <?php get_most_viewed('post',5); ?>
             </ol>
            </div>
        </div>
        <?php endif; ?>
	
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

register_widget('widget_popular');
?>