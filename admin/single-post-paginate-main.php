<?php

function single_post_paginate_main_page_html() {
    ?> 
    
    <div class="wrap">
        <h1><?php echo esc_html(get_admin_page_title()); ?></h1>
        <h2>Bienvenue sur la page de présentation de Single Post Paginate (SPP)</h2>
        <div class="notification is-primary mt-5 content spp-content">
            <p>Ce plugin vous permet : </p>
            <ul>
                <li>De générer un système de pagination stylisé* et customisable (plusieurs templates disponibles) pour naviger entre vos différents articles.</li>
                <li>De créer une pagination unique** où vous choisissez : les URL de votre pagination, le style.. Le tout via un shortcode, que vous pouvez placer où vous souhaitez.</li>
            </ul>
            <p>* Il s'agit d'une navigation qui se génère automatiquement à la fin de vos articles. Les URL sont gérées par le système de base de Wordpress</p>
            <p>** A la différence du point précédent, cette pagination est entièrement personnalisable, c'est à vous de gérer les URL entre lesquelles vous voulez naviguer. </p>
        </div>
        <div class="notification is-warning spp-content">
            <p><strong>Note :</strong> SPP propose une version gratuite avec des fonctionnalités de base, tel qu'une pagination qui se génére à la fin de chacun de vos articles, 3 templates possibles. Pour accéder à des fonctionnalités avancées : plus de templates, intégrations via shortcode, création d'une pagination avec choix des URL et une assistance premium, envisagez de passer à la version payante.</p>
            <p class="mb-5">Visitez notre site web pour en savoir plus sur les fonctionnalités de la version payante et pour obtenir votre licence.</p>
            <a href="" class="button is-primary is-rounded" target="_blank">Découvrir la version payante</a>
        </div>
        <div class="notification spp-content has-background-white-ter">

            <p>Commencez par configurer les options du système de pagination de vos articles en cliquant sur le lien ci-dessous.</p>

            <div class="spp-flex-between">
                <a href=<?php echo admin_url('admin.php?page=myPopUp-options'); ?> class="button is-primary is-rounded my-5" value="Redirection">Pagination des Articles</a>
                <a href="">Voir la démo</a>
            </div>
        </div>
        <div class="notification spp-content has-background-white-ter mt-5">
            <p>Pour créer vos propres paginations avec des URL personnalisables et créer vos shortcodes, cliquez sur le lien suivant.</p>

            <div class="spp-flex-between">
                <a href=<?php echo admin_url('admin.php?page=myPopUp-options'); ?> class="button is-primary is-rounded my-5" value="Redirection">Créer ma pagination</a>
                <a href="">Voir la démo</a>
            </div>
        </div>
    </div>

    <?php
}