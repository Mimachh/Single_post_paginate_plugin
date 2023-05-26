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