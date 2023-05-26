<?php

function single_post_paginate_style_page_html() { ?>
    <div class="wrap">
        <h1>SPP Style</h1>
        <form action="options.php" method="POST">

        <?php
                settings_errors();
                settings_fields('spp_style_group_name');              
                do_settings_sections('spp-admin-style');
                submit_button();
        ?>

        </form>
    </div>
<?php }