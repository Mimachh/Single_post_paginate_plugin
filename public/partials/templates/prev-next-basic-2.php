<?php

function spp_paginate_basic_prev_next_2($previous_post_url, $next_post_url) {
    
    $html = '
    <div class="spp-container-3">  
        <div class="spp-pagination-3 spp-p11">
            <ul>';
            if($previous_post_url != get_the_permalink()) {
                $html .= '
                <a href="'. $previous_post_url .'">
                    <li>Previous</li>
                </a>';
            }
            if($next_post_url != get_the_permalink()) { 
            $html .= '
                <a href="'. $next_post_url .'">
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