<?php
/**
 * Plugin Name: Footer Col 1 Widget 
 * Plugin URI: http://vn.opendigital.com.au 
 * Description: A widget that displays Link Widget
 * Author: Nguyen Sy Thanh Son
 * Version: 0.1
 * Author URI: http://vn.opendigital.com.au
 */
function footer_col1_widget() {
	register_widget( 'Col1_Widget' );
}
class Col1_Widget extends WP_Widget {

	function Col1_Widget() {
		$widget_ops = array( 'classname' => 'col1', 'description' => __('A widget that displays the social links ', 'col1') );
		
		$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'col1-widget' );
		
		$this->WP_Widget( 'col1-widget', __('Col 1 Widget', 'col1'), $widget_ops, $control_ops );
	}
	
	function widget( $args, $instance ) {
		extract( $args );

		//Our variables from the widget settings.
		$title = apply_filters('widget_title', $instance['title'] );
		$name = $instance['meta_key'];

		echo $before_widget;

		// Display the widget title 
		if ( $title )
			echo $before_title . $title . $after_title;


		$posts = get_posts(array('meta_key' => $name, 'meta_value' => true));
		echo '<ul>';
		foreach ($posts as $post): setup_postdata($post);
			$link = (get_post_meta($post->ID, 'external_link', true))?get_post_meta($post->ID, 'external_link', true):get_permalink();
			$target = (get_post_meta($post->ID, 'external_link', true))?'_blank':'';
		?>
			<a target="<?php echo $target;?>" href="<?php echo $link; ?>"><?php the_title();?></a>
		<?php
		endforeach;
		echo '</ul>';

		
		echo $after_widget;
	}

	//Update the widget 
	 
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		//Strip tags from title and name to remove HTML 
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['meta_key'] = $new_instance['meta_key'];

		return $instance;
	}

	
	function form( $instance ) {

		//Set up some default widget settings.
		$defaults = array( 'title' => __('', 'col1'), 'meta_key' => __('', 'col1') );
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'col1'); ?></label>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'meta_key' ); ?>"><?php _e('Meta Key:', 'col1'); ?></label>
			<input id="<?php echo $this->get_field_id( 'meta_key' ); ?>" type="text" name="<?php echo $this->get_field_name( 'meta_key' ); ?>" style="width:100%;" value="<?php echo $instance['meta_key']; ?>">
		</p>
		
	<?php
	}
}

add_action( 'widgets_init', 'footer_col1_widget' );


?>
