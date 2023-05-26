<?php

// Custom de la couleur
// Custom du border radius

function spp_paginate_arrows($previous_post_url, $next_post_url) {
    $arrowColor = esc_html(get_option('spp_arrow_color_pagination'));
    $bgColor = esc_html(get_option('spp_bg_color_pagination'));
    $borderRadius = esc_html(get_option('spp_border_radius_pagination'));
    
    
    $html = '
    <div class="spp-container-3">  
        <div class="spp-pagination-3 spp-p8">
            <ul>';
            if($previous_post_url != get_the_permalink()) {
                $html .= '
                    <a class="" href="'. $previous_post_url .'"
                    style="background-color: '. $bgColor .';
                    border-radius: '. $borderRadius .'px;
                    "
                    >
                        <li style="color: '. $arrowColor .';"> < </li>
                    </a> ';
                }
                if($next_post_url != get_the_permalink()) { 
                $html .= '
                    <a href="'. $next_post_url .'"
                    style="background-color: '. $bgColor .';
                    border-radius: '. $borderRadius .'px;
                    "
                    >
                        <li style="color: '. $arrowColor .';"> > </li>
                    </a>';
                }
                $html .= '
            </ul>
        </div>  
    </div>
    ';

    return $html;
}