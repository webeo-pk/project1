<?php
class Paymob_Style {

	public static function paymob_admin() {
		wp_enqueue_style( 'paymob-admin-css', plugins_url( PAYMOB_PLUGIN_NAME ) . '/assets/css/admin.css', array(), PAYMOB_VERSION );
	}

	public static function paymob_list_gateways() {
		wp_enqueue_style( 'paymob_list_gateways', plugins_url( PAYMOB_PLUGIN_NAME ) . '/assets/css/paymob_list_gateways.css', array(), PAYMOB_VERSION );
	}

	public static function paymob_save_cards() {
		wp_enqueue_style( 'paymob-save-cards', plugins_url( PAYMOB_PLUGIN_NAME ) . '/assets/css/save-cards.css', array(), PAYMOB_VERSION );
	}

	public static function paymob_enqueue() {
		wp_enqueue_style( 'paymob-css', plugins_url( PAYMOB_PLUGIN_NAME . '/assets/css/paymob.css' ), array(), PAYMOB_VERSION );
	}

	public static function confirmation_popup() {
		wp_enqueue_style( 'paymob-css', plugins_url( PAYMOB_PLUGIN_NAME ) . '/assets/css/confirmation-popup.css', array(), PAYMOB_VERSION );
	}

	public static function hide_main_gateway_enqueue() {
		wp_enqueue_style( 'hide-main-paymob-css', plugins_url( PAYMOB_PLUGIN_NAME . '/assets/css/checkout-block.css' ), array(), PAYMOB_VERSION );
	}
}
