<?php

function single_post_paginate_options_page_html() { ?>
    <div class="spp-bg-color-primary spp-screen-wrap">
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
    </div>


<?php }