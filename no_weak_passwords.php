<?php
/**
 *
 * @link              http://www.jeremymullis.com
 * @since             0.1.0
 * @package           No_weak_passwords
 *
 * @wordpress-plugin
 * Plugin Name:       No Weak Passwords
 * Plugin URI:        https://github.com/drdogbot7/wp-no-weak-passwords
 * Description:       Hide the checkbox that allows the setting of weak passwords.
 * Version:           0.1.0
 * Author:            drdogbot7
 * Author URI:        https://www.jeremymullis.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       no_weak_passwords
 * Domain Path:       /languages
 */

add_action( 'login_enqueue_scripts', 'force_strong_passwords_login');

function force_strong_passwords_login() {
  wp_add_inline_style( 'login', '.pw-weak{display:none!important}' );
}


add_action('admin_enqueue_scripts', 'force_strong_passwords_admin');

function force_strong_passwords_admin() {
  wp_add_inline_style( 'wp-admin', '.pw-weak{display:none!important}' );
}
