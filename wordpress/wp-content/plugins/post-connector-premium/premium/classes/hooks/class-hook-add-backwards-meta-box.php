<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

class SP_Hook_Add_Backwards_Meta_Box extends SP_Hook {
	protected $tag = 'pc_meta_box_creation_after';

	public function run( $connection ) {

		// Check if we should add the SP_Meta_Box_Manage_Parent meta box
		if ( '1' == $connection->get_backwards_linking() && $connection->get_parent() != $connection->get_child() ) {
			new SP_Meta_Box_Manage_Parent( $connection );
		}

	}
}