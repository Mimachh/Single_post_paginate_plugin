<?php 

add_action('rest_api_init', 'spp_shortcode_create_route');


function spp_shortcode_create_route() {
    register_rest_route('spp-shortcodes/v1', 'manageSppShortcodes', array(
        'methods' => 'POST',
        'callback' => 'createSppShortcode'
    ));

}
function createSppShortcode($data) {

        $spp_post_title = sanitize_text_field($data['spp_post_title']);

        $existing_post_id = post_exists($spp_post_title);

        if (!$existing_post_id) {
            return wp_insert_post(array(
                'post_type' => 'spp_shortcode',
                'post_status' => 'publish',
                'post_title' => $spp_post_title,
                'meta_input' => array(
                   'mpu_activate' => '',

                ),
            ));
        } else {
            wp_send_json_error('Existe déjà');
           
        }
 
}