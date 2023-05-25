<?php

// Custom de la couleur
// Custom du border radius

function spp_paginate_arrows($previous_post_url, $next_post_url) {
    
    $html = '
    <div class="spp-container-3">  
        <div class="spp-pagination-3 spp-p8">
            <ul>';
            if($previous_post_url != get_the_permalink()) {
                $html .= '
                    <a class="" href="'. $previous_post_url .'">
                        <li> < </li>
                    </a> ';
                }
                if($next_post_url != get_the_permalink()) { 
                $html .= '
                    <a href="'. $next_post_url .'">
                        <li> > </li>
                    </a>';
                }
                $html .= '
            </ul>
        </div>  
    </div>
    ';

    return $html;
}