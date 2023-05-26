<?php

function single_post_paginate_options_page_html() { ?>


    Dans le form : 
        <!-- - activer / désactiver via un switch avec comme valeur de défault non -->
        - choix du template avec images exemple : bouton radio
        <!-- - Emplacement, debut ou fin de contenu -->
        - Text première et dernière page
        - Laisser le choix de la couleur
        - Shortcode

    Tout est envoyé dans la table options

    <div class="wrap">
        <h1>SPP Options</h1>
        <form action="options.php" method="POST">
            <?php
                settings_errors();
                settings_fields('spp_settings_group_name');
                do_settings_sections('spp-admin-options');
                submit_button();
            ?>
        </form>
    </div>

<?php }