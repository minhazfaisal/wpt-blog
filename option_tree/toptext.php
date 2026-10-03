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
		'title'      => esc_html__( 'Topbar Text', 'wpt1' ),
		'id'         => 'topbar',
		'desc'       => esc_html__( 'Manage the text for the topbar.', 'wpt1' ),
		'subsection' => true,
		'fields'     => array(
			array(
				'id'           => 'top1',
				'type'         => 'text',
				'title'        => esc_html__( 'Topbar Text 1', 'wpt1' ),
				'desc'         => esc_html__( 'Enter the text for the first topbar field.', 'wpt1' ),
			),
			array(
				'id'           => 'top2',
				'type'         => 'text',
				'title'        => esc_html__( 'Topbar Text 2', 'wpt1' ),
				'desc'         => esc_html__( 'Enter the text for the second topbar field.', 'wpt1' ),
			),
			
)));
// phpcs:enable
