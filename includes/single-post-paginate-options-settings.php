<?php

require_once dirname(dirname(__FILE__)) . '/admin/form-fields/options-page/single-post-paginate-options-field-page.php';

add_action('admin_init', 'SPPOptionssettings');

function SPPOptionssettings() {
    add_settings_section(
        'spp-options-section', //slug de la section 
        esc_html__('Pagination des articles', 'single-post-paginate-domain'), 
        'spp_settings_section_callback', 
        'spp-admin-options'
    );

    // ACTIVATION PAGINATE
    register_setting(
        'spp_settings_group_name', // group input name
        'spp_activate_pagination', 
        array('sanitize_callback' => 'sanitize_text_field', 'default' =>  "off")
    );

    add_settings_field(
        'spp_activation_choice', 
        esc_html__('Voulez-vous activer la pagination de vos Articles ?', 'single-post-paginate-domain'), 
        'sppActivateFieldHTML', 
        'spp-admin-options', // slug de la page en cours
        'spp-options-section' // slug de la section
    );

    // LOCALISATION PAGINATE
    register_setting(
        'spp_settings_group_name', // group input name
        'spp_localisation_pagination', 
        array('sanitize_callback' => 'sanitize_text_field', 'default' =>  "0")
    );

    add_settings_field(
        'spp_localisation_choice', 
        esc_html__('Où voulez-vous afficher votre pagination ?', 'single-post-paginate-domain'), 
        'sppLocalisationFieldHTML', 
        'spp-admin-options', // slug de la page en cours
        'spp-options-section' // slug de la section
    );

    // CHOIX DU TEMPLATE
    register_setting(
        'spp_settings_group_name', // group input name
        'spp_template_pagination', 
        array('sanitize_callback' => 'sanitize_text_field', 'default' =>  "0")
    );

    add_settings_field(
        'spp_template_choice', 
        esc_html__('Choisissez la base de votre template (customisable ensuite)', 'single-post-paginate-domain'), 
        'sppTemplateFieldHTML', 
        'spp-admin-options', // slug de la page en cours
        'spp-options-section' // slug de la section
    );
}

