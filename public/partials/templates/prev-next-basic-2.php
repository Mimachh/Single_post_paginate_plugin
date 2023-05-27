<?php

function spp_paginate_basic_prev_next_2($previous_post_url, $next_post_url) {
    

    $leftShadow = sppGenerateLeftShadowBox();
    $rightShadow = sppGenerateRightShadowBox();


    $bgColor = sppGenerateBgColor();
    $textColor = sppGenerateTextColor();

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
                    <li>Previous</li>
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
                    <li>Next</li>
                </a>';
            }
            $html .= '
            </ul>
        </div>  
    </div>
    ';

    return $html;
}