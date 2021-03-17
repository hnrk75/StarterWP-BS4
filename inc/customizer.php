<?php
/**
 * StarterWP Theme Customizer
 * 
 * @package StarterWP
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

	function swp_customize_register( $wp_customize ) {
		$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
		$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
		$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	}
	
	add_action( 'customize_register', 'swp_customize_register' );
	
	function swp_remove_sections( $wp_customize ) {
		//$wp_customize->remove_section( 'colors' );
		//$wp_customize->remove_section( 'background_image' );
		//$wp_customize->remove_section( 'static_front_page' );
		//$wp_customize->remove_section( 'nav_menus' );
		//$wp_customize->remove_panel( 'widgets' );
		//$wp_customize->remove_section( 'header_image' );
		//$wp_customize->remove_section('custom_css');
		//$wp_customize->remove_section( 'title_tagline' );
	}

	add_action( 'customize_register', 'swp_remove_sections');

	if ( class_exists('Kirki') ) {

		Kirki::add_config( 'swp_theme', array(
			'capability'    => 'edit_theme_options',
			'option_type'   => 'theme_mod',
		) );

			// Social Media
			Kirki::add_section( 'socialmedia', array(
				'title'	=> esc_html__( 'Sociala Medier', 'text-domain' ),
				'priority'	=> 110,
			) );

				Kirki::add_field( 'swp_theme', [
					'type'        => 'text',
					'settings'    => 'facebook',
					'label'       => esc_html__( 'Facebook URL', 'text-domain' ),
					'section'     => 'socialmedia',
				] );
			
				Kirki::add_field( 'swp_theme', [
					'type'        => 'text',
					'settings'    => 'instagram',
					'label'       => esc_html__( 'Instagram URL', 'text-domain' ),
					'section'     => 'socialmedia',
				] );
			
				Kirki::add_field( 'swp_theme', [
					'type'        => 'text',
					'settings'    => 'linkedin',
					'label'       => esc_html__( 'LinkedIn URL', 'text-domain' ),
					'section'     => 'socialmedia',
				] );
			
				Kirki::add_field( 'swp_theme', [
					'type'        => 'text',
					'settings'    => 'youtube',
					'label'       => esc_html__( 'Youtube URL', 'text-domain' ),
					'section'     => 'socialmedia',
				] );

	}
	