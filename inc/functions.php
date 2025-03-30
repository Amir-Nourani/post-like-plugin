<?php
 defined( 'ABSPATH' ) || exit;

 function daneshjooyar_post_like_install(){
    global $wpdb;
    $table_post_like = $wpdb->prefix . 'dypl_post_likes';

    $sql = "
    CREATE TABLE `$table_post_like` (
    `ID` bigint unsigned NOT NULL AUTO_INCREMENT,
    `post_id` bigint unsigned NOT NULL,
    `user_id` bigint unsigned NOT NULL,
    `ip` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
    `liked` tinyint(1) NOT NULL DEFAULT '1',
    `created_at` datetime NOT NULL,
    PRIMARY KEY (`ID`),
    KEY `post_id` (`post_id`),
    KEY `user_id` (`user_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci
    ";
    
    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );
 }