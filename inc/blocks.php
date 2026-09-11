<?php
/**
 * Editor integration: block styles + pattern category.
 * The CSS for every style lives in style.css, keyed on the .is-style-* class.
 * Patterns live in /patterns and are auto-registered by WordPress.
 */

function cji_block_styles() {
	$panels = array(
		'card'             => 'Card (white)',
		'panel'            => 'Panel (olive tint)',
		'panel-neutral'    => 'Panel (warm grey)',
		'panel-olive'      => 'Panel (olive)',
		'panel-olive-dark' => 'Panel (olive dark)',
		'panel-dark'       => 'Panel (dark)',
		'glass'            => 'Glass (frosted)',
	);

	$styles = array(
		'core/group'      => $panels + array( 'narrow' => 'Narrow (reading width)' ),
		'core/column'     => $panels + array( 'photo' => 'Photo (fills card)' ),
		'core/columns'    => array(
			'cards'    => 'Cards',
			'carousel' => 'Card carousel',
		),
		'core/button'     => array(
			'white' => 'White',
			'ghost' => 'Text link',
		),
		'core/paragraph'  => array(
			'eyebrow'   => 'Eyebrow label',
			'lead'      => 'Lead',
			'caption'   => 'Caption',
			'link-icon' => 'Link with arrow',
			'pill'      => 'Pill badge',
		),
		'core/heading'    => array(
			'display' => 'Display',
		),
		'core/list'       => array(
			'ticks' => 'Tick list',
			'rows'  => 'Rows (hairlines)',
		),
		'core/separator'  => array(
			'rule' => 'Hairline',
		),
		'core/image'      => array(
			'photo'      => 'Photo (rounded)',
			'icon-badge' => 'Icon badge',
			'panel-fade' => 'Fade into panel',
		),
		'core/media-text' => array(
			'profile-card' => 'Profile card',
		),
		'core/cover'      => array(
			'hero' => 'Hero',
		),
	);

	foreach ( $styles as $block => $variants ) {
		foreach ( $variants as $name => $label ) {
			register_block_style( $block, array( 'name' => $name, 'label' => $label ) );
		}
	}

	// Core's circular "Rounded" image style clashes with the design; hide it.
	unregister_block_style( 'core/image', 'rounded' );
}
add_action( 'init', 'cji_block_styles' );

function cji_pattern_category() {
	register_block_pattern_category( 'cji', array(
		'label'       => 'Cheshire Joint Injections',
		'description' => 'Ready-made sections that match the Figma design system.',
	) );
}
add_action( 'init', 'cji_pattern_category' );
