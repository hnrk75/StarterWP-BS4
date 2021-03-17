<?php
/**
 * StarterWP Theme Metaboxes
 * 
 * @package StarterWP
 */

	function cmb2_swp_metaboxes() {
		$prefix = 'swp_';

		$cmb = new_cmb2_box( array(
			'id'            => 'about_metabox',
			'title'         => __( 'Column Content', 'text-domain' ),
			'object_types'  => array( 'page', ), // Post type
			'show_on'       => array( 'key' => 'page-template', 'value' => 'templates/fullwidth.php' ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true, // Show field names on the left
			// 'cmb_styles' => false, // false to disable the CMB stylesheet
			// 'closed'     => true, // Keep the metabox closed by default
		) );
	}

	add_action( 'cmb2_admin_init', 'cmb2_swp_metaboxes' );
