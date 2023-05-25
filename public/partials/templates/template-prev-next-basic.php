<?php

// Il faut que je rend customisable : 
// - La couleur du background
// - Le border radius
// - La couleur du text
// - Le choix du text
// - La couleur des flèches

function spp_paginate_basic_prev_next($previous_post_url, $next_post_url) {
    
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
            <a href="'. $previous_post_url .'">
                <span class="fas fa-angle-left"></span>
                '.  $previous_title .'
            </a>';
        }
        $html .= '
      </li>
      <li class="icon">';
        if($next_post_url != get_the_permalink()) {
          $html .= '
            <a href="'. $next_post_url .'">
            '. $next_title .'
                <span class="fas fa-angle-right"></span>
            </a>';
        }
        $html .= '
      </li>
    </ul>
  </div>
    ';

    return $html;
}