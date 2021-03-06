<?php

if ( !defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

class SP_Hook_Edit_Connection extends SP_Hook {
	protected $tag = 'pc_after_connection_edit';

	public function run( $connection ) {

		// Premium only fields
		update_post_meta( $connection->get_id(), SP_Constants::PM_PTL_SORTABLE, $connection->get_sortable() );
		update_post_meta( $connection->get_id(), SP_Constants::PM_PTL_APDP, $connection->get_after_post_display_parents() );
		update_post_meta( $connection->get_id(), SP_Constants::PM_PTL_BACKWARDS, $connection->get_backwards_linking() );
		update_post_meta( $connection->get_id(), SP_Constants::PM_PTL_APDC_EXCERPT, $connection->get_after_post_display_children_excerpt() );
		update_post_meta( $connection->get_id(), SP_Constants::PM_PTL_APDC_IMAGE, $connection->get_after_post_display_children_image() );

	}
}