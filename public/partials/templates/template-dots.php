<?php

// Il faut que je rend customisable : 
// - La couleur du background
// - Le border radius
// - La couleur des points
// - La couleur du big dot
// - La couleur des flèches

function spp_second_template($previous_post_url, $next_post_url){
    $html = '
    <div class="spp-template-2" aria-label="Pagination">
        <div class="spp-pagination-wrapper">';
        if($previous_post_url != get_the_permalink()) {
            $html .= '
                <a href=" '. $previous_post_url .' "> 
                    <svg class="spp-btn spp-btn--prev" height="55" viewBox="0 0 24 24" width="96" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.41 16.09l-4.58-4.59 4.58-4.59L14 5.5l-6 6 6 6z"/>
                        <path d="M0-.5h24v24H0z" fill="none"/>
                    </svg>
                </a> ';
        }
            $html .= '    
            <div class="spp-pagination-container">
                <div class="spp-little-dot spp-little-dot--first"></div>
                <div class="spp-little-dot">
                <div class="spp-big-dot-container">
                    <div class="spp-big-dot"></div>
                </div>
                </div>
                <div class="spp-little-dot  spp-little-dot--last"></div>
            </div> ';
            if($next_post_url != get_the_permalink()) {
                $html .= '
                    <a href=" '. $next_post_url .' ">
                        <svg class="spp-btn spp-btn--next" height="55" viewBox="0 0 24 24" width="96" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/>
                            <path d="M0-.25h24v24H0z" fill="none"/>
                        </svg>
                    </a>';
                }
                $html .= ' 
        </div>
    </div>    
';

return $html;
}