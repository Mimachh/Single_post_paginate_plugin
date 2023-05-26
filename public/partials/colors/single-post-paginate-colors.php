<?php 

function sppGenerateTextColor() {

}

function sppGenerateArrowColor() {
    return $arrowColor = esc_html(get_option('spp_arrow_color_pagination'));
}

function sppGenerateBgColor() {
    return $bgColor = esc_html(get_option('spp_bg_color_pagination'));
}


