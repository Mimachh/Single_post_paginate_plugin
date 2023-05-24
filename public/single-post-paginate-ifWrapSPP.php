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

    $html = 'blabla';
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