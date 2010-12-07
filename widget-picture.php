<?php
class widget_picture_link extends WP_Widget {
	function widget_picture_link() {
		$widget_ops = array('classname' => 'widget_picture_link', 'description' => __( 'A picture that links to an article') );
		$this->WP_Widget('picture_link', __('Picture Link'), $widget_ops);	
	}
	
    function widget($args, $instance ) {
		extract($args);
		$post_id = apply_filters('widget_post_id', $instance['post_id'], $instance, $this->id_base);
		$title = $instance['title'];
		$img_loc = $instance['img_loc'];
		$post_id = $instance['post_id'];

		echo $before_widget;
		?>
        
        	<div class="blackSpacerSmall"></div>
                
            <div id="cMediaBox" class="gradientBorderW">
                <a href="<?php echo get_permalink($post_id) ?>">
                	<img src="<?php echo $img_loc ?>" alt="<?php echo $title ?>" />
                </a>
                <div id="cMediaOverlay">
                 	<a href="<?php echo get_permalink($post_id) ?>">
                    	<img src="<?php bloginfo("template_directory") ?>/images/playBtn.gif" alt="Play Clip" />
                    </a>
                    
                    <h4>
                        <a href="<?php echo get_permalink($post_id) ?>">
							<?php echo $title ?>
                        </a>
                    </h4>
                    
                </div>
            </div>

        <?php
		echo $after_widget;
    }
	
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$new_instance = wp_parse_args((array) $new_instance, array( 'post_id' => '', 'title' => 0, 'img_loc' => ''));
		$instance['post_id'] = strip_tags($new_instance['post_id']);
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['img_loc'] = strip_tags($new_instance['img_loc']);
		return $instance;		
	}
	
    function form($instance)
    {
		$instance = wp_parse_args( (array) $instance, array( 'post_id' => '', 'title' => 0, 'img_loc' => '') );
		$post_id = $instance['post_id'];
		$title = $instance['title'];
		$img_loc = $instance['img_loc'];
?>
		<p>
        	<label for="<?php echo $this->get_field_id('post_id'); ?>"><?php _e('post_id:'); ?> 
            	<input class="widefat" id="<?php echo $this->get_field_id('post_id'); ?>" name="<?php echo $this->get_field_name('post_id'); ?>" type="text" value="<?php echo esc_attr($post_id); ?>" />
            </label>
        </p>
        <p>
        	<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('title'); ?></label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr($title); ?>" /> 
        </p>   
        <p>
        	<label for="<?php echo $this->get_field_id('img_loc'); ?>"><?php _e('img_loc'); ?> (320x232px)</label>
			<input class="widefat" type="text" id="<?php echo $this->get_field_id('img_loc'); ?>" name="<?php echo $this->get_field_name('img_loc'); ?>" value="<?php echo esc_attr($img_loc); ?>" /> 
        </p>               
<?php
    }
}

register_widget('widget_picture_link');
?>