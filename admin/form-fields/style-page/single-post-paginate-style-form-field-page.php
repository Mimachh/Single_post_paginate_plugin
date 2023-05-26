<?php

function spp_style_section_callback() { ?>
    <p>Choisissez la palette de couleur de votre pagination.</p>
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
<?php }


function spp_style_border_section_callback() { ?>
    <p>Choisissez le style de vos bordures.</p>
<?php }


function spp_sanitize_number_field($value) {
    return absint($value); // Utilisez absint() pour convertir la valeur en un entier absolu
}
function sppBorderRadiusFieldHTML() { ?>
    <div class="spp-input-field">
        <input name="spp_border_radius_pagination" type="number" value="<?php echo esc_attr( get_option('spp_border_radius_pagination', "0") ); ?>" >
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
            <option value="dashed" <?php selected($border_style, 'dashed'); ?>><?php esc_html_e('Pointillé', 'single-post-paginate-domain'); ?></option>
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
        <h3 class="spp-shadow-box-title"><?php esc_html_e('Couleur de la Shadow Box', 'single-post-paginate-domain'); ?></h3>
        <input name="spp_shadow_box_color" type="color" value="<?php echo $shadow_color; ?>">
    </div>
    <div class="spp_shadowFieldsContainer"></div>
    <?php
}