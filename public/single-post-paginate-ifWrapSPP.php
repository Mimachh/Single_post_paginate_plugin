<?php

add_filter('the_content', 'ifWrapSPP');

function ifWrapSPP($content) {

    if(is_main_query() AND is_single() AND is_singular('post') AND esc_html(get_option('spp_activate_pagination') === 'activate')) {
        return createSingleHTMLSPP($content); 
    } else {
        return $content;
    }
}

function createSingleHTMLSPP($content) {

    // template 2
    $html = '
        <div class="spp-template-2">
            <div class="pagination-wrapper">
            <svg class="btn btn--prev" height="96" viewBox="0 0 24 24" width="96" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.41 16.09l-4.58-4.59 4.58-4.59L14 5.5l-6 6 6 6z"/>
                <path d="M0-.5h24v24H0z" fill="none"/>
            </svg>
            
            <div class="pagination-container">
                <div class="little-dot  little-dot--first"></div>
                <div class="little-dot">
                <div class="big-dot-container">
                    <div class="big-dot"></div>
                </div>
                </div>
                <div class="little-dot  little-dot--last"></div>
            </div>
            
            <svg class="btn btn--next" height="96" viewBox="0 0 24 24" width="96" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/>
                <path d="M0-.25h24v24H0z" fill="none"/>
            </svg>
        </div>
        </div>
    ';


    // Intégrer une condition en fonction du choix du template
    // si template choisi == 1 alors utilise telle fonction etc
    // chaque fonction génère et return un html qui sera récupéré ensuite juste en dessous. 

    if(esc_html(get_option('spp_localisation_pagination')) == 0 ) {
        return 
        '<div>
            <div> '. $content .' </div>
            <div> '. $html .' </div> 
        </div>';
    } else {
        return 
        '<div>
            <div> '. $html .' </div> 
            <div> '. $content .' </div>
        </div>';
    }

}