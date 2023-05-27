<?php

function single_post_paginate_style_page_html() { ?>

    <div class="spp-bg-color-primary spp-screen-wrap">
        <div class="wrap">
            <h1>SPP Style</h1>
            <form action="options.php" method="POST">

            <?php
                if(esc_html(get_option('spp_activate_pagination') === 'activate')) {
                    settings_errors();
                    settings_fields('spp_style_group_name');              
                    do_settings_sections('spp-admin-style');
                    submit_button();
                } else { ?>
                    <p>Veuillez d'abord activer la pagination en cliquant <a href="<?php echo admin_url('admin.php?page=spp-admin-options'); ?>">ici</a></p>
                <?php }
            ?>

            </form>
        </div>
    </div>

<?php }