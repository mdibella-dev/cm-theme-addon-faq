<?php
/**
 * Functions to activate, initiate and deactivate the plugin.
 *
 * @author  Marco Di Bella
 * @package cm-theme-addon-faq
 */

namespace cm_theme_addon_faq;


/** Prevent direct access */

defined( 'ABSPATH' ) or exit;



/**
 * The init function for the plugin.
 *
 * @since 1.0.0
 */

function plugin_init() {
    // Load text domain, use relative path to the plugin's language folder
    load_plugin_textdomain( 'cm-faq', false, plugin_basename( PLUGIN_DIR ) . '/languages' );
}

add_action( 'init', __NAMESPACE__ . '\plugin_init' );



/**
 * The activation function for the plugin.
 *
 * @since 1.0.0
 */

function plugin_activation() {
    // Do something!
}

register_activation_hook( __FILE__, __NAMESPACE__ . '\plugin_activation' );



/**
 * The deactivation function for the plugin.
 *
 * @since 1.0.0
 */

function plugin_deactivation() {
    // Do something!
}

register_deactivation_hook( __FILE__, __NAMESPACE__ . '\plugin_deactivation' );



/**
 * The uninstall function for the plugin.
 *
 * @since 1.0.0
 */

function plugin_uninstall()
{
    // Do something!
    // Delete options!
    // Delete custom tables!
}

register_uninstall_hook( __FILE__, __NAMESPACE__ . '\plugin_uninstall' );



/**
 * Loads a set of necessary JS scripts and stylesheets.
 *
 * @since 1.0.0
 */

function plugin_enqueue_scripts() {

    wp_enqueue_script(
        'cm-faq-script',
        PLUGIN_URL . '/assets/build/js/frontend.min.js',
        [
            'jquery'
        ],
        PLUGIN_VERSION,
        true
    );

    wp_enqueue_style(
        'cm-faq-style',
        PLUGIN_URL . '/assets/build/css/frontend.min.css',
        [],
        PLUGIN_VERSION
    );
}

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\plugin_enqueue_scripts', 9990 );
