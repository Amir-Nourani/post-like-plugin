<?php
/**
 * Plugin Name: Daneshjooyar Post Like
 * Plugin URI: https://daneshjooyar.com
 * Description: This plugins for like posts
 * Author: Hamed Moodi
 * Author URI: https://daneshjooyar.com/teacher/h_m_mood
 * Text Domain: daneshjooyar-post-like
 * Domain Path: /languages
 */

 defined( 'ABSPATH' ) || exit;

 define('DANESHJOOYAR_POST_LIKE_VERSION', '1.0.0');
 define('DANESHJOOYAR_POST_LIKE_INC_PATH' , plugin_dir_path(__FILE__) . 'inc/');
 define('DANESHJOOYAR_POST_LIKE_JS' , plugin_dir_url(__FILE__) . 'assets/js/');
 define('DANESHJOOYAR_POST_LIKE_CSS' , plugin_dir_url(__FILE__) . 'assets/css/');
 
 global $wpdb;
 $wpdb->dypl_post_likes =$wpdb->prefix . 'dypl_post_likes';

 require_once(DANESHJOOYAR_POST_LIKE_INC_PATH . 'functions-like.php');
 require_once(DANESHJOOYAR_POST_LIKE_INC_PATH . 'functions.php');

 register_activation_hook( __FILE__, 'daneshjooyar_post_like_install' );
