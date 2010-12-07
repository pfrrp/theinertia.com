<?php
class widget_advertisement_alt extends WP_Widget {
	function widget_advertisement_alt() {
		$widget_ops = array('classname' => 'widget_advertisement_alt', 'description' => __( 'An advertisment widget (300x600)') );
		$this->WP_Widget('advertisement_alt', __('Advertisement Alt'), $widget_ops);	
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
        	<div class="ad cAdInnerTall">
				<script type="text/javascript">
				/* <![CDATA[ */
					<?php if (is_category('surf') || (is_single() && in_category('surf'))) { ?>
						GA_googleFillSlot("300x250_Inertia_Surf_Middle_Right");			  
					<?php }elseif (is_category('music-art') || (is_single() && in_category('music-art'))) { ?>
						GA_googleFillSlot("300x250_Inertia_Music_and_Art_Middle_Right");
					<?php }elseif (is_category('health') || (is_single() && in_category('health'))) { ?>
						GA_googleFillSlot("300x250_Inertia_Health_Middle_Right");
					<?php }elseif (is_category('environment') || (is_single() && in_category('environment'))) { ?>
						GA_googleFillSlot("300x250_Inertia_Environment_Middle_Right");
					<?php }elseif (is_category('business-media') || (is_single() && in_category('business-media'))) { ?>
						GA_googleFillSlot("300x250_Inertia_Business_and_Media_Middle_Right");
					<?php }elseif (is_category('travel') || (is_single() && in_category('travel'))) { ?>
						GA_googleFillSlot("300x250_Inertia_Travel_Middle_Right");
					<?php }elseif (is_category('politics') || (is_single() && in_category('politics'))) { ?>
						GA_googleFillSlot("300x250_Inertia_Politics_Middle_Right");
					<?php }elseif (is_category('comedy') || (is_single() && in_category('comedy'))) { ?>
						GA_googleFillSlot("300x250_Inertia_Comedy_Middle_Right");
					<?php }elseif (is_page('contributors') || is_author()) { ?>
						GA_googleFillSlot("300x250_Inertia_Contributors_Middle_Right");
					<?php }else { ?>
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

register_widget('widget_advertisement_alt');
?>