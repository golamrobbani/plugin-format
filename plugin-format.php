<?php
if (!defined('ABSPATH')) {
    die;
} // Cannot access directly.

/**
 *
 * @package   GolamRobbani - Plugin Format
 * @author    GolamRobbani <support@plugin-format.com>
 * @link      https://plugin-format.com
 * @copyright 2022 GolamRobbani
 *
 * Plugin Name: Plugin Format
 * Plugin URI: https://wordpress.org/plugins/plugin-format
 * Author: Plugin Format
 * Author URI: https://plugin-format.com
 * Version: 1.0.6.9
 * Description: plugin format description
 * Text Domain: plugin-format
 * Domain Path: /languages
 *
 */

if (!class_exists('Grpf')) {

    if (!defined('GRPF_FILE')) {
        define('GRPF_FILE', __FILE__);
    }

    require_once plugin_dir_path(__FILE__) . 'app/Grpf.php';
}
