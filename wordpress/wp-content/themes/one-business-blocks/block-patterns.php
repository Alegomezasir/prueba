<?php
/**
 * One Business Blocks: Block Patterns
 *
 * @since One Business Blocks 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since One Business Blocks 1.0
 *
 * @return void
 */
function one_business_blocks_register_block_patterns() {
	$block_pattern_categories = array(
		'one-business-blocks'    => array( 'label' => __( 'One Business Blocks', 'one-business-blocks' ) ),
	);

	$block_pattern_categories = apply_filters( 'one_business_blocks_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'one_business_blocks_register_block_patterns', 9 );
