<?php

// Custom de la couleur
// Custom du border radius

function spp_paginate_arrows($previous_post_url, $next_post_url) {

    $borderComplete = sppGenerateBorders();
    $leftShadow = sppGenerateLeftShadowBox();
    $rightShadow = sppGenerateRightShadowBox();

    $arrowColor = sppGenerateArrowColor();
    $bgColor = sppGenerateBgColor();
    
    $html = '
    <div class="spp-container-3">  
        <div class="spp-pagination-3 spp-p8">
            <ul>';
                if($previous_post_url != get_the_permalink()) {
                $html .= '
                    <a class="" href="'. $previous_post_url .'"
                    style="background-color: '. $bgColor .';
                    '. $borderComplete .';
                    '. $leftShadow  .';
                    "
                    >
                        <li style="color: '. $arrowColor .';"> < </li>
                    </a> ';
                }
                if($next_post_url != get_the_permalink()) { 
                $html .= '
                    <a href="'. $next_post_url .'"
                    style="background-color: '. $bgColor .';
                    '. $borderComplete .';
                    '. $rightShadow  .';
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