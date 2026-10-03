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
		'title'      => esc_html__( 'Favicon', 'wpt1' ),
		'id'         => 'favicon',
		'desc'       => esc_html__( 'Upload your favicon here.', 'wpt1' ),
		'subsection' => true,
		'fields'     => array(
			array(
				'id'           => 'h_fav_img',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Favicon', 'wpt1' ),
				'compiler'     => 'true',
				'desc'         => esc_html__( 'Favicon size width: 16px, height: 16px', 'wpt1' ),
				'subtitle'     => esc_html__( 'Upload any media using the WordPress native uploader', 'wpt1' ),
				'preview_size' => 'full',
			)
			
)));
// phpcs:enable
