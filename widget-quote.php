<?php
class widget_quote extends WP_Widget {
	function widget_quote() {
		$widget_ops = array('classname' => 'widget_quote', 'description' => __( 'Quote of the week!') );
		$this->WP_Widget('quote', __('Quote'), $widget_ops);	
	}

	function widget($args, $instance) {
		extract($args); 
		$title = empty( $instance['title'] ) ? '' : $instance['title'];
		$author = empty( $instance['author'] ) ? '' : $instance['author'];
		$quote = empty( $instance['quote'] ) ? '' : $instance['quote'];
		echo $before_widget;
		?>
         <div class="cLowerRightCol gradientBorderW">
            <div class="cLowerRightColInner">
                <h5 class="dialogTitleSm">
                    <?php echo $title ?>
                </h5>
                
                <em class="quoteBody">
                 <?php echo $quote ?>
                </em>
                
                <strong class="quoteAuthor">
                    - <?php echo $author ?>
                </strong>
            </div>
        </div>   
		<?php
		echo $after_widget; 
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$new_instance = wp_parse_args((array) $new_instance, array( 'title' => '', 'author' => '', 'quote' => ''));
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['author'] = strip_tags($new_instance['author']);
		$instance['quote'] = strip_tags($new_instance['quote']);
		return $instance;		
	}
	
    function form($instance)
    {
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'author' => '', 'quote' => '') );
		$title = $instance['title'];
		$author = $instance['author'];
		$quote = $instance['quote'];
?>
		<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></label></p>
        <p>   
		<p><label for="<?php echo $this->get_field_id('author'); ?>"><?php _e('Author:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('author'); ?>" name="<?php echo $this->get_field_name('author'); ?>" type="text" value="<?php echo esc_attr($author); ?>" /></label></p>
        <p>  
		<p><label for="<?php echo $this->get_field_id('quote'); ?>"><?php _e('Quote:'); ?> <textarea class="widefat" id="<?php echo $this->get_field_id('quote'); ?>" name="<?php echo $this->get_field_name('quote'); ?>"><?php echo esc_attr($quote); ?>"</textarea></label></p>
        <p>                  
<?php
    }
}

register_widget('widget_quote');
?>