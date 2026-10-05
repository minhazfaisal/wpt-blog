<?php
/**
 * Redux Framework WordPress editor config.
 * For full documentation, please visit: https://devs.redux.io/
 *
 * @package Redux Framework
 */

// phpcs:disable
defined( 'ABSPATH' ) || exit;

Redux::set_section( $opt_name,
	array(
		'title'      => esc_html__( 'Copyright Text', 'wpt1' ),
		'id'         => 'c_editor',
		'desc'       => esc_html__( 'Edit the copyright text for your footer.', 'wpt1' ),
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'copyright_editor',
				'type'     => 'editor',
				'title'    => esc_html__( 'Enter Copyright Text', 'wpt1' ),
				'subtitle' => esc_html__( '', 'wpt1' ),
				'default'  => '',
			)
		),
	)
);
// phpcs:enable
