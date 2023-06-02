<?php

function spp_paginate_basic_prev_next_2($previous_post_url, $next_post_url) {
    

    $leftShadow = sppGenerateLeftShadowBox();
    $rightShadow = sppGenerateRightShadowBox();


    $bgColor = sppGenerateBgColor();
    $textColor = sppGenerateTextColor();

    if(sppGenerateTextAfterChoice() === 'Titre') {
        $previous_choice = get_the_title($previous_title);
        $next_choice = get_the_title($next_title);
    } else if (sppGenerateTextAfterChoice() === 'P/S') {
        $previous_choice = esc_html('Précédent', 'single-post-paginate-domain');
        $next_choice = esc_html('Suivant', 'single-post-paginate-domain');
    }

    $html = '
    <div class="spp-container-3">  
        <div class="spp-pagination-3 spp-p11">
            <ul>';
            if($previous_post_url != get_the_permalink()) {
                $html .= '
                <a href="'. $previous_post_url .'"
                style="background-color: '. $bgColor .';
                --background-color-variable:'. $bgColor .'; 
                '. $leftShadow  .';
                color: '. $textColor .';"
                >
                    <li>'. $previous_choice .'</li>
                </a>';
            } else {
                $html .= '
                <a
                style="background-color: '. $bgColor .';
                --background-color-variable:'. $bgColor .'; 
                '. $leftShadow  .';
                color: '. $textColor .';"
                >
                    <li>&nbsp;</li>
                </a>';
            }
            if($next_post_url != get_the_permalink()) { 
            $html .= '
                <a href="'. $next_post_url .'"
                style="background-color: '. $bgColor .';
                --background-color-variable:'. $bgColor .';
                '. $rightShadow  .';
                color: '. $textColor .';"
                >
                    <li>'. $next_choice .'</li>
                </a>';
            } else {
                $html .= '
                <a
                style="background-color: '. $bgColor .';
                --background-color-variable:'. $bgColor .';
                '. $rightShadow  .';
                color: '. $textColor .';"
                >
                    <li>&nbsp;</li>
                </a>';
            }
            $html .= '
            </ul>
        </div>  
    </div>
    ';

    return $html;
}