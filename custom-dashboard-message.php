<?php
/*
Plugin Name: Motyw strony
Plugin URL: https://github.com/Fichtner21
Description: Podmiana wiadomości powitalenej w kokpicie na możliwość zmiany motywu strony za pomocą funkcji
Version: 0.1
Author: Ernest Fichtner
Author URI: https://github.com/Fichtner21
*/

/**
 * Usunięcie defaultowej wiadomości powitalenj
 *
 * @access      public
 * @since       1.0 
 * @return      void
*/
remove_action( 'welcome_panel', 'wp_welcome_panel' );

function wpex_wp_welcome_panel() {

	echo "Tutaj możesz zmienić motyw strony:";
}

add_action( 'welcome_panel', 'wpex_wp_welcome_panel' );
