<?php
// if uninstall.php is not called by WordPress, die
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    die;
}

global $wpdb,$table_prefix;

$wp_emp = $table_prefix.'emp';
$dropTable = "DROP TABLE `$wp_emp`;";
$wpdb->query($dropTable);