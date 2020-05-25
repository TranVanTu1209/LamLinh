<?php

function RV_load_scripts()
{
    wp_enqueue_style('rv-style', plugin_dir_url(__FILE__) . 'css/responsivevoice.css');
    wp_enqueue_script('responsive-voice', 'https://code.responsivevoice.org/1.6.3/responsivevoice.js?source=wp-plugin');
}

add_action('wp_enqueue_scripts', 'RV_load_scripts');