<?php

// JE fais passer : quelle photo

function spp_template_premium_1($previous_post_url, $next_post_url, $previous_title, $next_title) {

    $bgColor = sppGenerateBgColor();
    $borderColor = sppGenerateBorderColor();
    $textColor = sppGenerateTextColor();
    $bgTextColor = sppGenerateBackgroundTextColor();
    $shadow = sppGenerateShadowBoxPremiumTemplate();
    $image = sppGenerateImagePremiumTemplate1();
    if (sppGenerateTextAfterChoice() === 'Titre') {
        $previous_choice = get_the_title($previous_title);
        $next_choice = get_the_title($next_title);
    } else if (sppGenerateTextAfterChoice() === 'P/S') {
        $previous_choice = esc_html('Précédent', 'single-post-paginate-domain');
        $next_choice = esc_html('Suivant', 'single-post-paginate-domain');
    }

    $html = '<div class="spp-pagination-premium-1"
    style="
    --spp-template-premium-variable-bg-text-color: ' . $bgTextColor . ';
    --background-color-variable: ' . $bgColor . ';
    --spp-template-premium-variable-border-color: '. $borderColor .';
    color: '. $textColor .';
    --spp-template-premium-variable-box-shadow: ' . $shadow . ';
    "
    >';

    if ($previous_post_url != get_the_permalink()) {
        $html .= '<a class="spp-pagination-premium-1-text" href="' . $previous_post_url . '">' . $previous_choice . '</a>';
    } else {
        $html .= '<a class="spp-pagination-premium-1-text">&nbsp;</a>';
    }

    $html .= '<ul class="spp-pagination-premium-1-counter">
        <li class="spp-pagination-premium-1-number">&nbsp;&nbsp;&nbsp;</li>
        <div class="spp-pagination-premium-1-background">
            '. $image .'
        </div>
        <li class="spp-pagination-premium-1-number">&nbsp;&nbsp;&nbsp;</li>
    </ul>';

    if ($next_post_url != get_the_permalink()) {
        $html .= '<a class="spp-pagination-premium-1-text" href="' . $next_post_url . '">' . $next_choice . '</a>';
    } else {
        $html .= '<a class="spp-pagination-premium-1-text">&nbsp;</a>';
    }

    $html .= '</div>';

    return $html;
}