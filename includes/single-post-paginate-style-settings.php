<?php

require_once dirname(dirname(__FILE__)) . '/admin/form-fields/style-page/single-post-paginate-style-form-field-page.php';

add_action('admin_init', 'SPPStylesettings');

function SPPStylesettings() {

    $choixDuTemplate = esc_html(get_option('spp_template_pagination'));


    // COLORS

    add_settings_section(
        'spp-style-color-section', //slug de la section 
        esc_html__('Couleurs', 'single-post-paginate-domain'), 
        'spp_style_section_callback', 
        'spp-admin-style'
    );

    // Background Color
    register_setting(
        'spp_style_group_name', // group input name
        'spp_bg_color_pagination', 
        array('sanitize_callback' => 'sanitize_text_field', 'default' =>  "0")
    );

    add_settings_field(
        'spp_style_bg_color_choice', 
        esc_html__('Couleur de fond', 'single-post-paginate-domain'), 
        'sppBgColorFieldHTML', 
        'spp-admin-style', // slug de la page en cours
        'spp-style-color-section' // slug de la section
    );
    
    
    if($choixDuTemplate == 1 OR $choixDuTemplate == 4 OR $choixDuTemplate == 5) {
        // Text Color
        register_setting(
            'spp_style_group_name', // group input name
            'spp_text_color_pagination', 
            array('sanitize_callback' => 'sanitize_text_field', 'default' =>  "0")
        );
        
        add_settings_field(
            'spp_style_text_color_choice', 
            esc_html__('Couleur du texte', 'single-post-paginate-domain'), 
            'sppTextColorFieldHTML', 
            'spp-admin-style', // slug de la page en cours
            'spp-style-color-section' // slug de la section
        );
    }

    if($choixDuTemplate != 5) {
        // Arrow Color
        register_setting(
            'spp_style_group_name', // group input name
            'spp_arrow_color_pagination', 
            array('sanitize_callback' => 'sanitize_text_field', 'default' =>  "0")
        );
        
        add_settings_field(
            'spp_style_arrow_color_choice', 
            esc_html__('Couleur des flèches', 'single-post-paginate-domain'), 
            'sppArrowColorFieldHTML', 
            'spp-admin-style', // slug de la page en cours
            'spp-style-color-section' // slug de la section
        );
    }


    if($choixDuTemplate == 1 OR $choixDuTemplate == 3) {
        // BORDER Radius
        add_settings_section(
            'spp-style-border-section', // slug de la section 
            esc_html__('Bordure', 'single-post-paginate-domain'), 
            'spp_style_border_section_callback', 
            'spp-admin-style'
        );

        register_setting(
            'spp_style_group_name', // group input name
            'spp_border_radius_pagination', 
            array('sanitize_callback' => 'spp_sanitize_number_field', 'default' =>  "0")
        );

        add_settings_field(
            'spp_style_border_radius_choice', 
            esc_html__('Border Radius', 'single-post-paginate-domain'), 
            'sppBorderRadiusFieldHTML', 
            'spp-admin-style', // slug de la page en cours
            'spp-style-border-section' // slug de la section
        );

        // Borders
        // Ici je fais la grosseur des bordures et la couleur
    }


    // Ici je ferais le template 2 qui en plus des flèches et du fond d'écran doit pourvoir changer le gros point et les petits points


    // Attaquer la pagination premium

}