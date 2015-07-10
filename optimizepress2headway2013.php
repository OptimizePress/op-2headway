<?php
/*
Plugin Name: OptimizePress 2 fix for Headway 2013 theme
Plugin URI: http://www.optimizepress.com
Description: Compatibility plugin for OptimizePress 2 and Headway 2013 theme, removes initialization of stylesheets that was causing issues on OP Live Editor pages
Version: 1.0
Author: OptimizePress
Author URI: http://www.optimizepress.com
*/

/**
 * Remove action on wp_head on LE pages
 */
function opCompatHeadway2013()
{
    if ((function_exists('is_le_page') && is_le_page()) || defined('OP_LIVEEDITOR')) {
        remove_action('wp_head', 'headway_print_stylesheets', 7);
        remove_action('wp_head', 'headway_print_scripts', 8);
    }
}

add_action('wp_head', 'opCompatHeadway2013', 1);