<?php 

function sppGenerateTextColor() {
    return $textColor = esc_html(get_option('spp_text_color_pagination'));
}

function sppGenerateArrowColor() {
    return $arrowColor = esc_html(get_option('spp_arrow_color_pagination'));
}

function sppGenerateBgColor() {
    return $bgColor = esc_html(get_option('spp_bg_color_pagination'));
}

function sppGenerateBigPointColor() {
    return $bigPointColor = esc_html(get_option('spp_big_point_color_pagination'));
}

function sppGenerateSmallPointColor() {
    return $smallPointColor = esc_html(get_option('spp_small_points_color_pagination'));
}

function sppGenerateBackgroundTextColor() {
    return $bgTextColor = esc_html(get_option('spp_bg_text_color_pagination'));
}
