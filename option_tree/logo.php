<?php
/**
 * Redux Framework media config.
 * For full documentation, please visit: https://devs.redux.io/
 *
 * @package Redux Framework
 */

// phpcs:disable
defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Logo', 'wpt1' ),
		'id'         => 'logo',
		'desc'       => esc_html__( 'Upload your logo here.', 'wpt1' ),
		'subsection' => true,
		'fields'     => array(
			array(
				'id'           => 'h_logo_img',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Logo image', 'wpt1' ),
				'compiler'     => 'true',
				'desc'         => esc_html__( 'logo size width: 200px, height: 100px', 'wpt1' ),
				'subtitle'     => esc_html__( 'Upload any media using the WordPress native uploader', 'wpt1' ),
				'preview_size' => 'full',
			),
			array(
				'id'           => 'title',
				'type'         => 'text',
				'title'        => esc_html__( 'Page title', 'wpt1' ),
				'desc'         => esc_html__( 'Page title will be added for alt attribute', 'wpt1' ),
			),
			
)));
// phpcs:enable
