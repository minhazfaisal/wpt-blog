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
		'title'      => esc_html__( 'Hero Content', 'wpt1' ),
		'id'         => 'hero_c',
		'desc'       => esc_html__( 'Manage the hero content.', 'wpt1' ),
		'subsection' => true,
		'fields'     => array(
			array(
				'id'           => 'h_title',
				'type'         => 'text',
				'title'        => esc_html__( 'Hero Title', 'wpt1' ),
				'desc'         => esc_html__( 'Enter the hero title.', 'wpt1' ),
			),
			array(
				'id'           => 'h_top_text',
				'type'         => 'text',
				'title'        => esc_html__( 'Hero Top Text', 'wpt1' ),
				'desc'         => esc_html__( 'Enter the top text for the hero.', 'wpt1' ),
			),
			array(
				'id'           => 'h_bottom_text',
				'type'         => 'text',
				'title'        => esc_html__( 'Hero Bottom Text', 'wpt1' ),
				'desc'         => esc_html__( 'Enter the bottom text for the hero.', 'wpt1' ),
			),
			array(
				'id'           => 'h_btn_text',
				'type'         => 'text',
				'title'        => esc_html__( 'Hero Button Text', 'wpt1' ),
				'desc'         => esc_html__( 'Enter the text for the hero button.', 'wpt1' ),
			),
			array(
				'id'           => 'h_btn_url',
				'type'         => 'text',
				'title'        => esc_html__( 'Hero Button URL', 'wpt1' ),
				'desc'         => esc_html__( 'Enter the URL for the hero button.', 'wpt1' ),
			),
			array(
				'id'           => 'h_btn_color',
				'type'         => 'color',
				'title'        => esc_html__( 'Hero Button Color', 'wpt1' ),
				'desc'         => esc_html__( 'Enter the color for the hero button.', 'wpt1' ),
			),
			
)));
// phpcs:enable
