<?php

// Fonction pour afficher le champ 'spp_activate_pagination_shortcode'
function render_spp_activate_pagination_shortcode_meta_box($post) {
    $value = get_post_meta($post->ID, 'spp_activate_pagination_shortcode', true);
    ?>
    <label for="spp_activate_pagination_shortcode">Activate:</label>
    <input type="checkbox" name="spp_activate_pagination_shortcode" id="spp_activate_pagination_shortcode" value="1" <?php checked($value, '1'); ?>>
    <?php
}

function spp_save_custom_field_values($post_id) {
    // Enregistrez les valeurs pour 'mpu_activate' et 'mpu_is_all_pages'
    $fields = array('spp_activate_pagination_shortcode');
    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            $value = sanitize_text_field($_POST[$field]);
            update_post_meta($post_id, $field, $value);
        } 
        // else {
        //     delete_post_meta($post_id, $field);
        // }
    }

}
add_action('save_post_spp_shortcode', 'spp_save_custom_field_values');