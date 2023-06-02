<?php

function spp_style_section_callback() { ?>
    <p>Choisissez la palette de couleur de votre pagination.</p>
<?php }

function spp_text_section_callback() { ?>
    <p>Choisissez le texte qui sera affiché dans votre pagination.</p>
<?php }

function spp_style_image_section_callback() { ?>
    <p>Choisissez l'image à ajouter à votre pagination.</p>
<?php }

function sppBgColorFieldHTML() { ?> 
    <div class="spp-input-field">
        <input name="spp_bg_color_pagination" type="color" id="colorPicker" value="<?php echo esc_html(get_option('spp_bg_color_pagination'), "#fff000"); ?>">
    </div>
<?php }

function sppTextColorFieldHTML() { ?>
    <div class="spp-input-field">
        <input name="spp_text_color_pagination" type="color" id="colorPicker" value="<?php echo esc_html(get_option('spp_text_color_pagination'), "#000"); ?>" >
    </div>
<?php }

function sppArrowColorFieldHTML() { ?>
    <div class="spp-input-field">
        <input name="spp_arrow_color_pagination" type="color" id="colorPicker" value="<?php echo esc_html(get_option('spp_arrow_color_pagination'), "#000"); ?>">
    </div>
    <div class="spp_space_between_section"></div>
<?php }


function spp_style_border_section_callback() { ?>
    <p>Choisissez le style de vos bordures.</p>
<?php }


function spp_sanitize_number_field($value) {
    return absint($value); // Utilisez absint() pour convertir la valeur en un entier absolu
}
function sppBorderRadiusFieldHTML() { ?>
    <div class="spp-input-field">
        <input name="spp_border_radius_pagination" type="number" min="0" value="<?php echo esc_attr( get_option('spp_border_radius_pagination', "0") ); ?>" >
        px
    </div>
<?php }

function sppBorderThicknessFieldHTML() {
    $border_thickness = esc_attr(get_option('spp_border_thickness_pagination', '0'));
    ?>
    <div class="spp-input-field">
        <input name="spp_border_thickness_pagination" type="number" min="0" value="<?php echo $border_thickness; ?>"> px
    </div>
    <?php
}

function sppBorderStyleFieldHTML() {
    $border_style = esc_attr(get_option('spp_border_style_pagination', 'solid'));
    ?>
    <div class="spp-input-field">
        <select name="spp_border_style_pagination">
            <option value="solid" <?php selected($border_style, 'solid'); ?>><?php esc_html_e('Solide', 'single-post-paginate-domain'); ?></option>
            <option value="dashed" <?php selected($border_style, 'dashed'); ?>><?php esc_html_e('Haché', 'single-post-paginate-domain'); ?></option>
            <option value="dotted" <?php selected($border_style, 'dotted'); ?>><?php esc_html_e('En pointillés', 'single-post-paginate-domain'); ?></option>
        </select>
    </div>
    <?php
}

function sppBorderColorFieldHTML() {
    $border_color = esc_attr(get_option('spp_border_color_pagination', '#000000'));
    ?>
    <div class="spp-input-field">
        <input name="spp_border_color_pagination" type="color" value="<?php echo $border_color; ?>">
    </div>
    <div class="spp_space_between_section"></div>
    <?php
}

function spp_style_shadow_section_callback() { ?>
    <p>Choisissez le style d'ombre.</p>
<?php }

function sppShadowBoxEnabledFieldHTML() {
    $shadow_enabled = get_option('spp_shadow_box_enabled', 0);
    ?>
    <div class="spp-input-field">
        <label class="switch">
            <input name="spp_shadow_box_enabled" 
            type="checkbox" 
            value="activate"
            id="spp_shadow_box_switch"
            <?php checked(esc_html(get_option('spp_shadow_box_enabled') === 'activate')); ?>
            >
            <span class="slider round"></span>
        </label>
    </div>
    <?php
}

function sppShadowBoxTypeFieldHTML() {
    $shadow_type = esc_attr(get_option('spp_shadow_box_type', 'outter'));
    ?>
    <div class="spp-input-field" id="spp_shadow_box_type">
        <label>
            <input name="spp_shadow_box_type" type="radio" value="inner" <?php checked($shadow_type, 'inner'); ?>>
            <?php esc_html_e('Inner', 'single-post-paginate-domain'); ?>
        </label>
        <label>
            <input name="spp_shadow_box_type" type="radio" value="outter" <?php checked($shadow_type, 'outter'); ?>>
            <?php esc_html_e('Outter', 'single-post-paginate-domain'); ?>
        </label>
    </div>
    <div class="spp_shadowFieldsContainer"></div>
    <?php
}

function sppShadowBoxSizeFieldHTML() {
    $shadow_size = esc_attr(get_option('spp_shadow_box_size', 'medium'));
    ?>
    <div class="spp-input-field" id="spp_shadow_box_size">
        <select name="spp_shadow_box_size">
            <option value="small" <?php selected($shadow_size, 'small'); ?>><?php esc_html_e('Petit', 'single-post-paginate-domain'); ?></option>
            <option value="medium" <?php selected($shadow_size, 'medium'); ?>><?php esc_html_e('Moyen', 'single-post-paginate-domain'); ?></option>
            <option value="large" <?php selected($shadow_size, 'large'); ?>><?php esc_html_e('Grand', 'single-post-paginate-domain'); ?></option>
        </select>
    </div>
    <div class="spp_shadowFieldsContainer"></div>
    <?php
}

function sppShadowBoxColorFieldHTML() {
    $shadow_color = esc_attr(get_option('spp_shadow_box_color', '#000000'));
    ?>
    <div class="spp-input-field" id="spp_shadow_box_color">
        <input name="spp_shadow_box_color" type="color" value="<?php echo $shadow_color; ?>">
    </div>
    <div class="spp_shadowFieldsContainer"></div>
    <div class="spp_space_between_section"></div>
    <?php
}

function sppBigPointColorFieldHTML() {
    $bigDotColor = get_option('spp_big_point_color_pagination', '#000000');
    ?>
    <input type="color" name="spp_big_point_color_pagination" value="<?php echo esc_attr($bigDotColor); ?>">
    <?php
}

function sppSmallPointsColorFieldHTML() {
    $smallDotsColor = get_option('spp_small_points_color_pagination', '#000000');
    ?>
    <input type="color" name="spp_small_points_color_pagination" value="<?php echo esc_attr($smallDotsColor); ?>">
    <?php
}

function sppTextChoiceFieldHTML() {
    $text_choice = get_option('spp_text_choice_pagination', 0);
    ?>
    <div class="spp-input-field">
        <label for="spp_text_choice_pagination">Utiliser "Précédent/Suivant"  &nbsp;</label>
        <label class="switch">
            <input name="spp_text_choice_pagination" 
            type="checkbox" 
            id="spp_text_switch"
            <?php checked(esc_html(get_option('spp_text_choice_pagination') === 'on')); ?>
            >
            <span class="slider round"></span>
        </label>
        <label for="spp_text_choice_pagination">&nbsp; Utiliser le titre des articles</label>
    </div>
<?php }

function sppBgTextColorFieldHTML() {
    $backgroundTextColor = get_option('spp_bg_text_color_pagination', '#000000');
    ?>
    <input type="color" name="spp_bg_text_color_pagination" value="<?php echo esc_attr($backgroundTextColor); ?>">
    <?php
}


// Image background
function sppChooseWhichImgBackgroundPremiumHTML() {
    $img_choice = get_option('spp_choose_which_img_background_premium', 0);
    ?>
    <div class="spp-input-field">
        <label for="spp_choose_which_img_background_premium">Logo du site  &nbsp;</label>
        <label class="switch">
            <input name="spp_choose_which_img_background_premium" 
            type="checkbox" 
            id="spp_image_switch"
            <?php checked(esc_html(get_option('spp_choose_which_img_background_premium') === 'on')); ?>
            >
            <span class="slider round"></span>
        </label>
        <label for="spp_choose_which_img_background_premium">&nbsp; Image personnalisée</label>
    </div>
<?php }

function sppCustomImageBgHTML() { 
    $image_url = get_option('spp_choose_custom_img');
    $relative_image_url = $image_url ? wp_make_link_relative($image_url) : '';
    $button_text = $image_url ? esc_html__('Changer l\'image', 'single-post-paginate-domain') : esc_html__('Choisir une image', 'single-post-paginate-domain');
    $button_class = $image_url ? 'change-image-button' : 'choose-image-button';
    ?>

    <div class="spp-input-field-img-choose">
        <input name="spp_choose_custom_img" type="hidden" id="sppbgImage" value="<?php echo esc_url($relative_image_url); ?>">
        <div>
            <button type="button" class="button spp-<?php echo esc_attr($button_class); ?>"><?php echo esc_html($button_text); ?></button>
            <?php if ($image_url) : ?>
                <button type="button" class="button remove-image-button"><?php esc_html_e('Supprimer l\'image', 'single-post-paginate-domain'); ?></button>
            <?php endif; ?>
        </div>
        <img src="<?php echo esc_url($image_url); ?>" class="spp-preview-image">
    </div>
    <?php
}

function sppIsCustomImageLinkHTML() {
    $is_link = get_option('spp_is_custom_img_link', 0);
    ?>
    <div class="spp-input-field">
        <label class="switch">
            <input name="spp_is_custom_img_link" 
            type="checkbox" 
            id="spp_image_is_link_switch"
            class="spp_is_custom_img_link"
            <?php checked(esc_html($is_link === 'on')); ?>
            >
            <span class="slider round"></span>
        </label>
    </div>   
<?php }

function sppIsCustomImageLinkToHomeHTML() {
    $is_link = get_option('spp_is_custom_img_link_to_home', 0);
    ?>
    <div class="spp-input-field spp-choose-type-of-link-div">
        <label for="spp_is_custom_img_link_to_home">Vers la page principale &nbsp;</label>
        <label class="switch">
            <input name="spp_is_custom_img_link_to_home" 
            type="checkbox" 
            id="spp_is_custom_img_link_to_home_switch"
            class="spp_is_custom_img_link_to_home"
            <?php checked(esc_html($is_link === 'on')); ?>
            >
            <span class="slider round"></span>
        </label>
        <label for="spp_is_custom_img_link_to_home">&nbsp; Personnaliser le lien</label>
    </div> 
<?php }

function sppCustomLogoLinkHTML() { 
    $custom_link = get_option('spp_custom_logo_link', '');
    ?>
    <div class="spp-input-field spp_custom_logo_link_div">
        <label for="spp_custom_logo_link">Entrer un lien  </label>
        <input name="spp_custom_logo_link" class="spp_custom_logo_link" type="text" id="spp_custom_logo_link" 
        value="<?php echo esc_html($custom_link); ?>" >
    </div>
<?php }