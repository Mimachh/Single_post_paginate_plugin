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
    if($choixDuTemplate == 5) {
        // Text Background Color
        register_setting(
            'spp_style_group_name', // group input name
            'spp_bg_text_color_pagination', 
            array('sanitize_callback' => 'sanitize_text_field', 'default' =>  "#000000")
        );

        add_settings_field(
            'spp_style_bg_text_color_choice', 
            esc_html__('Couleur arrière plan du texte', 'single-post-paginate-domain'), 
            'sppBgTextColorFieldHTML', 
            'spp-admin-style', // slug de la page en cours
            'spp-style-color-section' // slug de la section
        );
    }

    
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


        // TEXT

        add_settings_section(
            'spp-style-text-section', //slug de la section 
            esc_html__('Texte', 'single-post-paginate-domain'), 
            'spp_text_section_callback', 
            'spp-admin-style'
        );
        // Text Color
        register_setting(
            'spp_style_group_name', // group input name
            'spp_text_choice_pagination', 
            array('sanitize_callback' => 'sanitize_text_field', 'default' =>  "0")
        );
                
        add_settings_field(
            'spp_style_text_color_choice', 
            esc_html__('Choix du texte', 'single-post-paginate-domain'), 
            'sppTextChoiceFieldHTML', 
            'spp-admin-style', // slug de la page en cours
            'spp-style-text-section' // slug de la section
        );
    }

    if($choixDuTemplate == 1 OR $choixDuTemplate == 2 OR $choixDuTemplate == 3 ) {
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

    if($choixDuTemplate == 1 OR $choixDuTemplate == 2 OR $choixDuTemplate == 3) {
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
        register_setting(
            'spp_style_group_name', // Groupe d'options pour les options de bordure
            'spp_border_thickness_pagination',
            array('sanitize_callback' => 'spp_sanitize_number_field', 'default' =>  "0")
        );
        
        add_settings_field(
            'spp_style_border_thickness_choice',
            esc_html__('Épaisseur des bordures', 'single-post-paginate-domain'),
            'sppBorderThicknessFieldHTML',
            'spp-admin-style',
            'spp-style-border-section' // Utilisez l'identifiant de section correspondant
        );
        
        register_setting(
            'spp_style_group_name', // Groupe d'options pour les options de bordure
            'spp_border_style_pagination',
            array('sanitize_callback' => 'sanitize_text_field', 'default' =>  "solid")
        );
        
        add_settings_field(
            'spp_style_border_style_choice',
            esc_html__('Style de bordure', 'single-post-paginate-domain'),
            'sppBorderStyleFieldHTML',
            'spp-admin-style',
            'spp-style-border-section' // Utilisez l'identifiant de section correspondant
        );
        
        register_setting(
            'spp_style_group_name', // Groupe d'options pour les options de bordure
            'spp_border_color_pagination',
            array('sanitize_callback' => 'sanitize_text_field', 'default' =>  "#000000")
        );
        
        add_settings_field(
            'spp_style_border_color_choice',
            esc_html__('Couleur de bordure', 'single-post-paginate-domain'),
            'sppBorderColorFieldHTML',
            'spp-admin-style',
            'spp-style-border-section' // Utilisez l'identifiant de section correspondant
        );
    }
    if($choixDuTemplate == 5) {
        // BORDER Radius
        add_settings_section(
            'spp-style-border-section', // slug de la section 
            esc_html__('Bordure', 'single-post-paginate-domain'), 
            'spp_style_border_section_callback', 
            'spp-admin-style'
        );
        
        register_setting(
            'spp_style_group_name', // Groupe d'options pour les options de bordure
            'spp_border_color_pagination',
            array('sanitize_callback' => 'sanitize_text_field', 'default' =>  "#000000")
        );
        
        add_settings_field(
            'spp_style_border_color_choice',
            esc_html__('Couleur de bordure', 'single-post-paginate-domain'),
            'sppBorderColorFieldHTML',
            'spp-admin-style',
            'spp-style-border-section' // Utilisez l'identifiant de section correspondant
        );
    }

    // BOX SHADOW SECTION
    add_settings_section(
        'spp-style-shadow-section', // Slug de la section 
        esc_html__('Shadow Box', 'single-post-paginate-domain'), 
        'spp_style_shadow_section_callback', 
        'spp-admin-style'
    );
    // Activer/désactiver la Shadow Box
    register_setting(
        'spp_style_group_name', // Nom du groupe d'options
        'spp_shadow_box_enabled',
        array('sanitize_callback' => 'sanitize_text_field', 'default' => 0)
    );

    add_settings_field(
        'spp_shadow_box_enabled_field',
        esc_html__('Activer Shadow Box', 'single-post-paginate-domain'),
        'sppShadowBoxEnabledFieldHTML',
        'spp-admin-style',
        'spp-style-shadow-section'
    );

    // Choix de l'ombre (inner ou outter)
    register_setting(
        'spp_style_group_name', // Nom du groupe d'options
        'spp_shadow_box_type',
        array('sanitize_callback' => 'sanitize_text_field', 'default' => 'outter')
    );

    add_settings_field(
        'spp_shadow_box_type_field',
        esc_html__('Type de Shadow Box', 'single-post-paginate-domain'),
        'sppShadowBoxTypeFieldHTML',
        'spp-admin-style',
        'spp-style-shadow-section'
    );

    // Choix de la taille de l'ombre
    register_setting(
        'spp_style_group_name', // Nom du groupe d'options
        'spp_shadow_box_size',
        array('sanitize_callback' => 'sanitize_text_field', 'default' => 'medium')
    );

    add_settings_field(
        'spp_shadow_box_size_field',
        esc_html__('Taille de la Shadow Box', 'single-post-paginate-domain'),
        'sppShadowBoxSizeFieldHTML',
        'spp-admin-style',
        'spp-style-shadow-section'
    );

    // Couleur de l'ombre
    register_setting(
        'spp_style_group_name', // Nom du groupe d'options
        'spp_shadow_box_color',
        array('sanitize_callback' => 'sanitize_hex_color', 'default' => '#000000')
    );

    add_settings_field(
        'spp_shadow_box_color_field',
        esc_html__('Couleur de la Shadow Box', 'single-post-paginate-domain'),
        'sppShadowBoxColorFieldHTML',
        'spp-admin-style',
        'spp-style-shadow-section'
    );
    
    if($choixDuTemplate == 2) {
        // Point Color
        add_settings_section(
            'spp-style-point-color-section', //slug de la section 
            esc_html__('Couleurs des points', 'single-post-paginate-domain'), 
            'spp_style_section_callback', 
            'spp-admin-style'
        );

        register_setting(
            'spp_style_group_name',
            'spp_big_point_color_pagination',
            array('sanitize_callback' => 'sanitize_text_field', 'default' =>  "#000000")
        );

        add_settings_field(
            'spp_style_big_point_color_choice',
            esc_html__('Couleur du gros point', 'single-post-paginate-domain'),
            'sppBigPointColorFieldHTML',
            'spp-admin-style',
            'spp-style-point-color-section'
        );

        // Small Points Color
        register_setting(
            'spp_style_group_name',
            'spp_small_points_color_pagination',
            array('sanitize_callback' => 'sanitize_text_field', 'default' =>  "#000000")
        );

        add_settings_field(
            'spp_style_small_points_color_choice',
            esc_html__('Couleur des petits points', 'single-post-paginate-domain'),
            'sppSmallPointsColorFieldHTML',
            'spp-admin-style',
            'spp-style-point-color-section'
        );
    }

    if($choixDuTemplate == 1) {
        // Choix du texte

        register_setting(
            'spp_style_group_name', // Nom du groupe d'options
            'spp_shadow_box_color',
            array('sanitize_callback' => 'sanitize_hex_color', 'default' => '#000000')
        );

        add_settings_field(
            'spp_shadow_box_color_field',
            esc_html__('Couleur de la Shadow Box', 'single-post-paginate-domain'),
            'sppShadowBoxColorFieldHTML',
            'spp-admin-style',
            'spp-style-shadow-section'
        );  
    }
    // Attaquer la pagination premium


    if($choixDuTemplate == 5) {
        // Choix de l'image
        add_settings_section(
            'spp-style-image-section', // Slug de la section 
            esc_html__('Image', 'single-post-paginate-domain'), 
            'spp_style_image_section_callback', 
            'spp-admin-style'
        );
        register_setting(
            'spp_style_group_name', // Nom du groupe d'options
            'spp_choose_which_img_background_premium',
            array('sanitize_callback' => 'sanitize_text_field', 'default' => '0')
        );

        add_settings_field(
            'spp_choose_which_img_background_premium_field',
            esc_html__('Quelle image voulez-vous afficher?', 'single-post-paginate-domain'),
            'sppChooseWhichImgBackgroundPremiumHTML',
            'spp-admin-style',
            'spp-style-image-section'
        );
        register_setting(
            'spp_style_group_name', // Nom du groupe d'options
            'spp_choose_custom_img',
            array('sanitize_callback' => 'sanitize_text_field', 'default' => '0')
        );

        add_settings_field(
            'spp_choose_custom_img_field',
            null,
            'sppCustomImageBgHTML',
            'spp-admin-style',
            'spp-style-image-section'
        ); 
        // Faire de l'image un lien
        register_setting(
            'spp_style_group_name', // Nom du groupe d'options
            'spp_is_custom_img_link',
            array('sanitize_callback' => 'sanitize_text_field', 'default' => '0')
        );

        add_settings_field(
            'spp_is_custom_img_link_field',
            esc_html__('Voulez-vous faire de l\'image un lien ?', 'single-post-paginate-domain'),
            'sppIsCustomImageLinkHTML',
            'spp-admin-style',
            'spp-style-image-section'
        ); 
        // où emmene le lien ? 
        register_setting(
            'spp_style_group_name', // Nom du groupe d'options
            'spp_is_custom_img_link_to_home',
            array('sanitize_callback' => 'sanitize_text_field', 'default' => '0')
        );

        add_settings_field(
            'spp_is_custom_img_link_to_home_field',
            null,
            'sppIsCustomImageLinkToHomeHTML',
            'spp-admin-style',
            'spp-style-image-section'
        ); 
        register_setting(
            'spp_style_group_name', // Nom du groupe d'options
            'spp_custom_logo_link',
            array('sanitize_callback' => 'sanitize_text_field', 'default' => '0')
        );

        add_settings_field(
            'spp_custom_logo_link_field',
            null,
            'sppCustomLogoLinkHTML',
            'spp-admin-style',
            'spp-style-image-section'
        ); 
        
    }
    
}