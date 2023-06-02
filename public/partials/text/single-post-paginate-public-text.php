<?php

function sppGenerateTextAfterChoice() { 

    if(!empty(esc_html(get_option('spp_text_choice_pagination'))) AND esc_html(get_option('spp_text_choice_pagination') === 'on')) {
        $textChoice = "Titre";
    } else {
        $textChoice = "P/S";
    }

    return $textChoice;
}