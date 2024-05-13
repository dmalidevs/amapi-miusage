<?php
/**
 * Functions.
 *
 * @package wordpress-plugin
 */

if ( ! function_exists( 'amapi' ) ) {
	/**
	 * Get plugin info.
	 *
	 * @return object
	 */
	function amapi() {
		$info = array(
			'name'  => 'AM Miusage',
			'nonce' => wp_create_nonce( 'amapi-nonce' ),
		);
		return (object) $info;

	}
}



// Debug pring function.
if ( ! function_exists( 'pr' ) ) {
	/**
	 * Print debug data.
	 *
	 * @param mixed $data Data to print.
	 * @param bool  $die  Die after printing.
	 *
	 * @return void
	 */
	function pr( $data, $die = false ) {
		echo '<pre>';
		print_r( $data ); // phpcs:ignore
		echo '</pre>';
		// die if $die is true.
		if ( $die ) {
			die;
		}
	}
}

// Debug dump function.
if ( ! function_exists( 'vd' ) ) {
	/**
	 * Dump debug data.
	 *
	 * @param mixed $data Data to dump.
	 * @param bool  $die  Die after printing.
	 *
	 * @return void
	 */
	function vd( $data, $die = false ) {
		echo '<pre>';
		var_dump( $data ); // phpcs:ignore
		echo '</pre>';
		// die if $die is true.
		if ( $die ) {
			die;
		}
	}
}


// Debug dump function.
if ( ! function_exists( 've' ) ) {
	/**
	 * Dump debug data.
	 *
	 * @param mixed $data Data to dump.
	 * @param bool  $die  Die after printing.
	 *
	 * @return void
	 */
	function ve( $data, $die = false ) {
		echo '<pre>';
		var_dump( $data ); // phpcs:ignore
		echo '</pre>';
		// die if $die is true.
		if ( $die ) {
			die;
		}
	}
}

