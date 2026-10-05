<?php
/**
 * Redux Framework checkbox config.
 * For full documentation, please visit: https://devs.redux.io/
 *
 * @package Redux Framework
 */

// phpcs:disable
defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Enable Bottom Footer', 'wpt1' ),
		'id'               => 'eb_footer',
		'subsection'       => true,
		'customizer_width' => '450px',
		'desc'             => esc_html__( 'Enable or disable the bottom footer', 'wpt1' ),
		'fields'           => array(
			array(
				'id'       => 'ed_check',
				'type'     => 'checkbox',
				'title'    => esc_html__( 'Checkbox Option', 'wpt1' ),
				'subtitle' => esc_html__( 'Check to enable the bottom footer', 'wpt1' ),
				'desc'     => esc_html__( 'if checked 1 = on | 0 = off', 'wpt1' ),
				'default'  => '1', // 1 = on | 0 = off.
			)
)));
// phpcs:enable
