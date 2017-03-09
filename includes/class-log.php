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
		add_action( 'admin_menu', array( $this, 'add_submenu' ) );
	}

	public function add_submenu() {
		add_submenu_page( 'tools.php', 'Cron Run History', 'Cron Run History', 'manage_options', 'cron_status_log', array( $this, 'display_cron_history' ) );
	}

	public function display_cron_history() {
		echo '<H1>Cron History</H1>';

		$crons = get_option( 'cron_stats' );
		if ( is_array( $crons ) ) {
			echo count( $crons ) . ' logged cron executions in the last 24 hours<BR />';

			$keys = array_keys($crons);

			$difference = end( $keys ) - reset( $keys );
			$average = $difference/count($crons);

			echo 'You\'re averaging WP_Cron execution every ' . (int)$average . ' seconds<BR />';
		}
	}
}
