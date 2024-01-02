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
}

register_activation_hook(__FILE__, 'my_plugin_activation');

function my_plugin_deactivation()
{
}

register_deactivation_hook(__FILE__, 'my_plugin_deactivation');

function my_sc_fun()
{
    return "Function Call";
}
add_shortcode('my-sc', 'my_sc_fun');
