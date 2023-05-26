<?php

function sppGenerateLeftShadowBox() {
    $shadow_box_enable = esc_attr( get_option('spp_shadow_box_enabled', 0));
    
    $innerOrOutter = esc_html(get_option('spp_shadow_box_type'));
    if($innerOrOutter === 'inner') {
        $is_inset = "inset";
    } else {
        $is_inset = '';
    }
    
    $shadow_size =  esc_attr(get_option('spp_shadow_box_size', 'medium'));
    
    if($shadow_size === 'small') {
        $size = '1px';
    } else if($shadow_size === 'medium') {
        $size = '3px';
    } else if ($shadow_size === 'large') {
        $size = '7px';
    }
    
    $shadow_color =  esc_attr(get_option('spp_shadow_box_color', '#000000'));
    

    if($shadow_box_enable === "activate" ) {
        
        function adjustLeftShadow($size, $is_inset, $shadow_color) {
            return $leftShadow = "-webkit-box-shadow: $is_inset 5px 5px 15px $size $shadow_color; 
            box-shadow: $is_inset 5px 5px 15px $size $shadow_color;";
        }

        return $leftShadow = adjustLeftShadow($size, $is_inset, $shadow_color);

    } else {
        return $leftShadow = "";
    }

}

function sppGenerateRightShadowBox() {
    $shadow_box_enable = esc_attr( get_option('spp_shadow_box_enabled', 0));
    
    $innerOrOutter = esc_html(get_option('spp_shadow_box_type'));
    if($innerOrOutter === 'inner') {
        $is_inset = "inset";
    } else {
        $is_inset = '';
    }
    
    $shadow_size =  esc_attr(get_option('spp_shadow_box_size', 'medium'));
    $shadow_color =  esc_attr(get_option('spp_shadow_box_color', '#000000'));
    if($shadow_size === 'small') {
        $size = '1px';
    } else if($shadow_size === 'medium') {
        $size = '3px';
    } else if ($shadow_size === 'large') {
        $size = '7px';
    }
    
    
    if($shadow_box_enable === "activate" ) {
        
        function adjustRightShadow($size, $is_inset, $shadow_color) {
            return $rightShadow = "-webkit-box-shadow: $is_inset -5px 5px 15px $size $shadow_color; 
            box-shadow: $is_inset -5px 5px 15px $size $shadow_color;";
        }

        return $rightShadow = adjustRightShadow($size, $is_inset, $shadow_color);

    } else {
        return $rightShadow = "";
    }

}

