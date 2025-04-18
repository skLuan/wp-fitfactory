<?php
/**
 * Funciones del tema hijo Storefront Child.
 */

/**
 * Encolar los estilos del tema padre y del tema hijo.
 */
function storefront_child_enqueue_styles() {
    // Cargar los estilos del tema padre (Storefront).
    wp_enqueue_style( 'storefront-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->parent()->get('Version') );

    // Cargar los estilos del tema hijo.
    wp_enqueue_style( 'storefront-child-style', get_stylesheet_uri(), array( 'storefront-style' ), '1.0.0' );
}

add_action( 'wp_enqueue_scripts', 'storefront_child_enqueue_styles' );

/**
 * Cargar el text domain para traducciones del tema hijo.
 */
function storefront_child_setup() {
    load_child_theme_textdomain( 'fitfactory-domain', get_stylesheet_directory() . '/languages' );
}

add_action( 'after_setup_theme', 'storefront_child_setup' );