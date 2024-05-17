<?php
/**
 * AM API Block Class
 *
 * @package wordpress-plugin
 */

namespace AmMiusage;

/**
 * AM API Block Class
 */
class AM_API_Block {
	use Traits\Singleton, Traits\PluginData; // Use the Singleton and PluginData trait.

	/**
	 * AM API Block constructor.
	 */
	public function __construct() {
		$this->init();
	}

	/**
	 * Initialize the class.
	 */
	public function init() {
		add_action( 'init', array( $this, 'register_block' ) );
		add_action( 'enqueue_block_editor_assets', array( $this, 'amapi_enqueue_assets' ) );
	}
	/**
	 * Enqueue assets.
	 *
	 * @return void
	 */
	public function amapi_enqueue_assets() {
		wp_localize_script(
			'wp-blocks',
			'amapi_data',
			self::get_localize()
		);
	}
	/**
	 * Register the block.
	 */
	public function register_block() {
		register_block_type( AM_API_PLUGIN_PATH . '/assets/block' );
	}

	/**
	 * Render the block.
	 *
	 * @param array $attributes Block attributes.
	 * @return string
	 */
	public function render_block( $attributes ) {
		$api_data = get_option( 'amapi_miusage_data' );

		if ( ! $api_data ) {
			return '';
		}

		ob_start();
		?>
		<div class="am-miusage-block">
			<h2><?php echo esc_html( $api_data['title'] ); ?></h2>
			<p><?php echo esc_html( $api_data['content'] ); ?></p>
		</div>
		<?php
		return ob_get_clean();
	}


	/**
	 * Register the scripts.
	 */
	public function register_scripts() {
		// Register the editor script.
		wp_register_script(
			'am-miusage-block-editor',
			esc_url( AM_API_PLUGIN_URL . 'assets/dist/block-editor.js' ),
			array( 'wp-blocks', 'wp-element', 'wp-editor', 'wp-components', 'wp-i18n' ),
			AM_API_PLUGIN_VERSION,
			true
		);

		// Register the block script.
		wp_register_script(
			'am-miusage-block',
			esc_url( AM_API_PLUGIN_URL . 'assets/dist/block.js' ),
			array( 'wp-blocks', 'wp-element', 'wp-components', 'wp-i18n' ),
			AM_API_PLUGIN_VERSION,
			true
		);

		// Register the editor style.
		wp_register_style(
			'am-miusage-block-editor',
			esc_url( AM_API_PLUGIN_URL . 'assets/dist/block-editor.css' ),
			array( 'wp-edit-blocks' ),
			AM_API_PLUGIN_VERSION
		);

		// Register the block style.
		wp_register_style(
			'am-miusage-block',
			esc_url( AM_API_PLUGIN_URL . 'assets/dist/block.css' ),
			array(),
			AM_API_PLUGIN_VERSION
		);

	}



}
