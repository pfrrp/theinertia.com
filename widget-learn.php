<?php
class widget_learn extends WP_Widget {
	function widget_learn() {
		$widget_ops = array('classname' => 'widget_learn', 'description' => __( 'Learn something new!') );
		$this->WP_Widget('learn', __('Learn'), $widget_ops);	
	}

	function widget($args, $instance) {
		extract($args); 
		
		$xml = new DOMDocument();
		$xml -> load('http://cargocollective.com/feed-rss.php?url=learnsomethingeveryday');
		$item = $xml -> getElementsByTagName('channel') -> item(0) -> getElementsByTagName('item') -> item(0);
		
		$desc = $item -> getElementsByTagName('description') -> item(0) -> nodeValue;
		$begPos = strpos($desc, 'http:');
		$endPos = strpos($desc, '.jpg') + 4;
		
		$img = substr($desc, $begPos, $endPos - $begPos);
		
		
		echo $before_widget;
		?>
		<div class="cRandomContent gradientBorderN">
			<a href="http://cargocollective.com/learnsomethingeveryday" title="Learn Something Every Day">
				<img src="<?php echo $img ?>" alt="Learn Something Every Day" />
                <img src="<?php bloginfo("template_directory") ?>/images/learn.jpg" alt="Learn Something Every Day" />
			</a>
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

register_widget('widget_learn');
?>