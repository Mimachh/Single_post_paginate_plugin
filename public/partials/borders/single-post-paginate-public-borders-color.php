<?php

function sppGenerateBorderColor() {
    
    if(!empty(esc_html(get_option('spp_border_color_pagination')))) {
        $borderColor = esc_html(get_option('spp_border_color_pagination'));
    } else {
        $borderColor = 'transparent';
    }
    
    return $borderColor;
}