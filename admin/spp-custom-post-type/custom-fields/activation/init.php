<?php

require_once __DIR__ . '/form.php';

function spp_register_custom_field_activation() {
    register_meta('spp_shortcode', 'spp_activate_pagination_shortcode', array(
        'type' => 'boolean',
        'single' => true,
        'show_in_rest' => true,
    ));
}
add_action('init', 'spp_register_custom_field_activation');


function spp_add_custom_field_activation_meta_box() {

    // Boîte méta pour 'spp_activate'
    add_meta_box(
        'spp-activate-meta-box',
        'Activation',
        'render_spp_activate_pagination_shortcode_meta_box',
        'spp_shortcode',
        'normal',
        'default'
    );

}
add_action('add_meta_boxes', 'spp_add_custom_field_activation_meta_box');