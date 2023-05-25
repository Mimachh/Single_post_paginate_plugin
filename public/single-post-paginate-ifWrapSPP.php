<?php

//first template
require_once plugin_dir_path( __FILE__ ) . 'partials/templates/template-prev-next-basic.php';

// Second template
require_once plugin_dir_path( __FILE__ ) . 'partials/templates/template-dots.php';


add_filter('the_content', 'ifWrapSPP');

function ifWrapSPP($content) {

    if(is_main_query() AND is_single() AND is_singular('post') AND esc_html(get_option('spp_activate_pagination') === 'activate')) {
        return createSingleHTMLSPP($content); 
    } else {
        return $content;
    }
}

function createSingleHTMLSPP($content) {
    // PREV NEXT URL
    $previous_post_url = get_permalink(get_adjacent_post(false, '', true));
    // $previous_title = url_to_postid($previous_post_url);
    $next_post_url = get_permalink(get_adjacent_post(false, '', false));
    // $next_title = url_to_postid($next_post_url);
    

    
    // template 1
    // il faudra que je passe le resultat des options du titre prev et next
    $spp_paginate_basic_prev_next = spp_paginate_basic_prev_next($previous_post_url, $next_post_url);


    // template 2
    $spp_paginate_template = spp_second_template($previous_post_url, $next_post_url);
    // Intégrer une condition en fonction du choix du template
    // si template choisi == 1 alors utilise telle fonction etc
    // chaque fonction génère et return un html qui sera récupéré ensuite juste en dessous. 

    if(esc_html(get_option('spp_localisation_pagination')) == 0 ) {
        return 
        '<div>
            <div> '. $content .' </div>
            <div> '. $spp_paginate_basic_prev_next .' </div> 
        </div>';
    } else {
        return 
        '<div>
            <div> '. $spp_paginate_basic_prev_next .' </div> 
            <div> '. $content .' </div>
        </div>';
    }

}