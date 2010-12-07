<?php
class widget_advertisement_hp_wide extends WP_Widget {
	function widget_advertisement_hp_wide() {
		$widget_ops = array('classname' => 'widget_advertisement_hp_wide', 'description' => __( 'An advertisment widget (982x91) hp)') );
		$this->WP_Widget('advertisement_hp_wide', __('Advertisement HP Wide'), $widget_ops);	
	}
	
    function widget($args, $instance ) {
		extract($args);
		//$title = apply_filters('widget_title', $instance['title'], $instance, $this->id_base);
		//$b = $instance['border'] ? '1' : '0';

		echo $before_widget;
			?>
        	<div class="ad" id="cAdWide">
				<script type="text/javascript">
				/* <![CDATA[ */
				<?php if (is_home() || is_page('home')) { ?>
					GA_googleFillSlot("982x91_Inertia_Homepage_Bottom_Middle");
				<?php } ?>
				/* ]]> */
                </script>       
            </div>
        <?php
		echo $after_widget;
    }
	
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		//$new_instance = wp_parse_args((array) $new_instance, array( 'title' => '', 'border' => 0));
		//$instance['title'] = strip_tags($new_instance['title']);
		//$instance['border'] = $new_instance['border'] ? 1 : 0;
		return $instance;		
	}
	
    function form($instance)
    {
    }
}

register_widget('widget_advertisement_hp_wide');
?>