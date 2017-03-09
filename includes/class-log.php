<?php
/**
 * Cron Status Log.
 *
 * @since   0.1.0
 * @package Cron_Status
 */

/**
 * Cron Status Log.
 *
 * @since 0.1.0
 */
class CS_Log {
	/**
	 * Parent plugin class.
	 *
	 * @since 0.1.0
	 *
	 * @var   Cron_Status
	 */
	protected $plugin = null;

	/**
	 * Constructor.
	 *
	 * @since  0.1.0
	 *
	 * @param  Cron_Status $plugin Main plugin object.
	 */
	public function __construct( $plugin ) {
		$this->plugin = $plugin;
		$this->hooks();
	}

	/**
	 * Initiate our hooks.
	 *
	 * @since  0.1.0
	 */
	public function hooks() {

	}
}
