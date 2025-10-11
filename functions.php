<?php
    function wp_adv_theme_support(){
        add_theme_support('title-tag');
        add_theme_support('custom-logo');
    }

    add_action('after_setup_theme', 'wp_adv_theme_support');

    function wp_adv_menus(){
        $locations = [
            'primary' => 'Desktop Primary Left Sidebar',
            'footer' => 'Footer Menu Items',
        ];
        register_nav_menus($locations);

    }

    add_action('init','wp_adv_menus');

    function wp_adv_register_styles(){
        wp_enquee_style('wp-adv-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', [], '5.0.2', 'all');
        wp_enquee_style('wp-adv-style', get_stylesheet_url(), ['wp-adv-bootstrap'], '1.0', 'all');
        wp_enquee_style('wp-adv-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css', []. '7.0.1', 'all');

    }
    add_action('wp_enquee_scripts', 'wp_adv_register_styles');