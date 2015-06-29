<?php
/*
Plugin Name: Brad Themes Extend
Plugin URI: http://themeforest.net/portfolio/bradweb
Description: A plugin to extend functionality for brad themes
Version: 1.0
Author: Bradweb
Author URI: http://themeforest.net/portfolio/bradweb
*/




// Load shortcodes
require_once( plugin_dir_path( __FILE__ ) . 'brad-shortcodes/brad-shortcodes.php' );
require_once( plugin_dir_path( __FILE__ ) . 'brad_custom_posts.php' );

// Intialiaze Shortcodes
new bradShortcodes();