<?php
if ( ! class_exists( 'WC_Paymob_Blocks' ) ) {
	require_once plugin_dir_path( __FILE__ ) . 'gateway-blocks.php';

	final class WC_Paymob_Blocks extends Paymob_Gateway_Blocks {

		public function __construct() {
			$this->name = 'paymob';
		}
	}

}
