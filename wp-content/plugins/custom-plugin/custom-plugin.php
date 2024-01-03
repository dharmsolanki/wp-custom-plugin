<?php
/*
Plugin Name: My Custom Plugin
Description: This is Demo Plugin
Version: 1.0
Author: Dharm Solanki
Author URI: https://example.com
*/

// Your plugin code goes here.

if (!defined('ABSPATH')) {
    header("Location: /wp-custom-plugin/");
    die("");
}

function my_plugin_activation()
{
    global $wpdb,$table_prefix;
    $wp_emp = $table_prefix.'emp';

    $q = "CREATE TABLE IF NOT EXISTS `wp_custom_plugin`.`wp_emp` ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `email` VARCHAR(100) NOT NULL , `status` BOOLEAN NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";

    $wpdb->query($q);

    // $dummyData_query = "INSERT INTO `$wp_emp` (`name`, `email`, `status`) VALUES ('dharm', 'dharm@gmail.com', 1)";

    $data = [
        'name' => 'Akshar',
        'email' => 'akshar@gmail.com',
        'status' => 1,
    ];

    $wpdb->insert($wp_emp,$data);
}

register_activation_hook(__FILE__, 'my_plugin_activation');

function my_plugin_deactivation()
{
    global $wpdb,$table_prefix;
    $wp_emp = $table_prefix.'emp';

    $dropTableQuery = "TRUNCATE `$wp_emp`";
    $wpdb->query($dropTableQuery);
}

register_deactivation_hook(__FILE__, 'my_plugin_deactivation');

function my_sc_fun()
{
    return "Function Call";
}
add_shortcode('mysc', 'my_sc_fun');
