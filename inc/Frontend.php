<?php
/**
 * Frontend.
 *
 * @package WordPress-plugin
 */

namespace HasanMiusage;

class Frontend {
    use Traits\Singleton, Traits\PluginData; // Use the Singleton and PluginData trait.
    /**
     * Initialize the class.
     * 
     * @return void
     */
    public function __construct() {
        $this->init();
    }

    /**
     * Initialize the class.
     * 
     * @return void
     */
    public function init() {
        // Add admin assets if the current page is the plugin admin page.
        if (isset($_GET['page']) && 'hasan-miusage' === $_GET['page']) { // phpcs:ignore
        }
        add_action('wp_enqueue_scripts', array($this, 'enqueue_vite_assets'));
    }

    /**
     * Enqueue Vite assets.
     *
     * @return void
     */
    public function enqueue_vite_assets() {
        // Accessing the enqueue_assets method from the Vite class.
        Vite::get_instance()->enqueue_assets();
    }
}