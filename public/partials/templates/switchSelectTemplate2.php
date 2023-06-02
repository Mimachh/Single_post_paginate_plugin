<?php

function switchForSelectedTemplate2() {
    

    // PREV NEXT URL
    $previous_post_url = get_permalink(get_adjacent_post(false, '', true));
    $previous_title = url_to_postid($previous_post_url);
    $next_post_url = get_permalink(get_adjacent_post(false, '', false));
    $next_title = url_to_postid($next_post_url);

    

    // template 1
    // il faudra que je passe le resultat des options du titre prev et next
    $spp_paginate_basic_prev_next = spp_paginate_basic_prev_next($previous_post_url, $next_post_url);

    // template 2
    $spp_paginate_template_with_dots = spp_second_template($previous_post_url, $next_post_url);

    // template 3
    $spp_paginate_arrows = spp_paginate_arrows($previous_post_url, $next_post_url);

    // template 4
    $spp_paginate_basic_prev_next_2 = spp_paginate_basic_prev_next_2($previous_post_url, $next_post_url, $previous_title, $next_title);

    // template premium 1
    $spp_template_premium_1 = spp_template_premium_1($previous_post_url, $next_post_url, $previous_title, $next_title);


    $selectedTemplate = "";
    $choixDuTemplate = esc_html(get_option('spp_template_pagination'));

    switch ($choixDuTemplate) {
        case $choixDuTemplate == 1:
            $selectedTemplate = $spp_paginate_basic_prev_next;
            break;
        case $choixDuTemplate == 2:
            $selectedTemplate = $spp_paginate_template_with_dots;
            break;
        case $choixDuTemplate == 3:
            $selectedTemplate = $spp_paginate_arrows;
            break;
        case $choixDuTemplate == 4:
            $selectedTemplate = $spp_paginate_basic_prev_next_2;
            break;
        case $choixDuTemplate == 5:
            $selectedTemplate = $spp_template_premium_1;
            break;
        default:
        $selectedTemplate = $spp_paginate_basic_prev_next;
    }

    return $selectedTemplate;
}