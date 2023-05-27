<?php

// Il faut que je rend customisable : 
// - La couleur du background
// - Le border radius
// - La couleur du text
// - Le choix du text
// - La couleur des flèches

function spp_paginate_basic_prev_next($previous_post_url, $next_post_url) {
    
    $borderComplete = sppGenerateBorders();
    $leftShadow = sppGenerateLeftShadowBox();
    $rightShadow = sppGenerateRightShadowBox();

    $arrowColor = sppGenerateArrowColor();
    $bgColor = sppGenerateBgColor();
    $textColor = sppGenerateTextColor();

    if(1 == 2 ) {
        $next_title = url_to_postid($next_post_url);
        $next_title = get_the_title($next_title);
    } else {
        $next_title = 'Next';
    }

    if(1 == 2 ) {
        $previous_title = url_to_postid($previous_post_url);
        $previous_title = get_the_title($previous_title);
    } else {
        $previous_title = 'Previous';
    }
    
    $html = '
    <div class="spp-container-pagination-1">
    <ul class="spp-pagination-template-1">
      <li class="icon">';
        if($previous_post_url != get_the_permalink()) {
            $html .= '
            <a href="'. $previous_post_url .'" 
            style="background-color: '. $bgColor .';
            '. $borderComplete .';
            '. $leftShadow  .';
            color: '. $textColor .';
            ">
                <span class="fas fa-angle-left"
                style="color: '. $arrowColor .';"
                ></span>
                '.  $previous_title .'
            </a>';
        }
        $html .= '
      </li>
      <li class="icon">';
        if($next_post_url != get_the_permalink()) {
          $html .= '
            <a href="'. $next_post_url .'"
            style="background-color: '. $bgColor .';
            '. $borderComplete .';
            '. $rightShadow  .';
            color: '. $textColor .';
            "
            >
            '. $next_title .'
                <span class="fas fa-angle-right"
                style="color: '. $arrowColor .';"
                ></span>
            </a>';
        }
        $html .= '
      </li>
    </ul>
  </div>
    ';

    return $html;
}