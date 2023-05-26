<?php

function sppGenerateBorders() {
    
    if(!empty(esc_html(get_option('spp_border_radius_pagination')))) {
        $borderRadius = esc_html(get_option('spp_border_radius_pagination'));
    } else {
        $borderRadius = '10';
    }

    if(!empty(esc_html(get_option('spp_border_thickness_pagination')))) {
        $borderThickness = esc_html(get_option('spp_border_thickness_pagination'));
    } else {
        $borderThickness = '1';
    }

    if(!empty(esc_html(get_option('spp_border_style_pagination')))) {
        $borderStyle = esc_html(get_option('spp_border_style_pagination'));
    } else {
        $borderStyle = 'solid';
    }
    
    if(!empty(esc_html(get_option('spp_border_color_pagination')))) {
        $borderColor = esc_html(get_option('spp_border_color_pagination'));
    } else {
        $borderColor = 'transparent';
    }
    
    return $borderComplete = 'border-radius:'. $borderRadius .'px; border: '. $borderThickness .'px '. $borderStyle .' '. $borderColor;
}