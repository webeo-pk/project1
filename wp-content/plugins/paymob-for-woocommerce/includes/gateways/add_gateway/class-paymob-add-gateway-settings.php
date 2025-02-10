<?php

class Paymob_Gateway_Settings {

	public static function paymob_add_gateway_settings( $settings, $current_section ) {
		if ( 'paymob_add_gateway' === $current_section ) {

			$custom_settings = include PAYMOB_PLUGIN_PATH . 'includes/admin/paymob-custom_setting.php';
			// Merge custom settings with existing settings.
			$settings = array_merge( $settings, $custom_settings );
		}

		return $settings;
	}
}
