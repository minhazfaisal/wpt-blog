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
		'title'      => esc_html__( 'Hero Background', 'wpt1' ),
		'id'         => 'hero_bg',
		'desc'       => esc_html__( 'Upload your hero background image here.', 'wpt1' ),
		'subsection' => true,
		'fields'     => array(
			array(
				'id'           => 'h_hero_bg_img',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Hero background image', 'wpt1' ),
				'compiler'     => 'true',
				'desc'         => esc_html__( 'hero background size width: 100%, height: 100%', 'wpt1' ),
				'subtitle'     => esc_html__( 'Upload any media using the WordPress native uploader', 'wpt1' ),
				'preview_size' => 'full',
			)
			
			
)));
// phpcs:enable
