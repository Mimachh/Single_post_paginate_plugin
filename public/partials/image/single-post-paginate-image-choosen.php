<?php

function sppGenerateImagePremiumTemplate1() {
    $url = esc_html(get_option('spp_choose_custom_img'));
    $isLogoLink = esc_html(get_option('spp_is_custom_img_link'));
    $linkchoosen = esc_html(get_option('spp_custom_logo_link'));
    $custom_logo_id = get_theme_mod('custom_logo');
    $custom_logo_url = wp_get_attachment_image_src($custom_logo_id, 'full');
    
    if($isLogoLink === 'on') {
        if(esc_html(get_option('spp_is_custom_img_link_to_home', 0)) !== 'on') {
            $link = home_url('/');
        } else if(esc_html(get_option('spp_is_custom_img_link_to_home', 0)) === 'on'){
            $link =  esc_html(get_option('spp_custom_logo_link'));
        }

        
        if(!empty(get_option('spp_choose_custom_img')) AND get_option('spp_choose_which_img_background_premium') === 'on') {
            
            $spp_image = '<a href="'. $link .'"><img src="' . esc_url($url) .'" class="spp-pagination-premium-1-img" alt"Logo de la pagination"></a>'; 
        } else if (get_option('spp_choose_which_img_background_premium') !== 'on') {

            $spp_image = '<a href="'. $link .'"><img class="spp-pagination-premium-1-img" src="' . esc_url($custom_logo_url[0]) . '" alt="' . get_bloginfo('name') . '"></a>';
        }


    } else {
        if(!empty(get_option('spp_choose_custom_img')) AND get_option('spp_choose_which_img_background_premium') === 'on') {
            $spp_image = '<img src="' . esc_url($url) .'" class="spp-pagination-premium-1-img" alt"Logo de la pagination">'; 
        } else if (get_option('spp_choose_which_img_background_premium') !== 'on') {
            $spp_image = '<img class="spp-pagination-premium-1-img" src="' . esc_url($custom_logo_url[0]) . '" alt="' . get_bloginfo('name') . '">';
        }

    }





    return $spp_image;
} 