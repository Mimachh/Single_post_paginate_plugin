<?php

require_once dirname(dirname(__FILE__)) . '/admin/single-post-paginate-main.php';
require_once dirname(dirname(__FILE__)) . '/admin/single-post-paginate-options-page.php';
require_once dirname(dirname(__FILE__)) . '/admin/single-post-paginate-style-page.php';

add_action('admin_menu', 'Single_Post_Paginate_Add_My_Admin_Link');


function Single_Post_Paginate_Add_My_Admin_Link() {
    add_menu_page(
        'SPP', // Title of the page
        'Single Post Paginate', // Text to show on the menu link
        'manage_options', // Capability requirement to see the link
        'spp-admin-main-page', // The 'slug' - file to display when clicking the link
        'single_post_paginate_main_page_html',
        'dashicons-smiley',
        100
    );
    add_submenu_page(
        'spp-admin-main-page', // slug parent
        'SPP Presentation', // header title
        'Presentation', // nom du sous menu
        'manage_options', // capability
        'spp-admin-main-page', // URL slug
        'single_post_paginate_main_page_html' // callback
    );
    add_submenu_page(
        'spp-admin-main-page', // slug parent
        'SPP Options', // header title
        'Options', // nom du sous menu
        'manage_options', // capability
        'spp-admin-options', // URL slug
        'single_post_paginate_options_page_html' // callback
    );
    add_submenu_page(
        'spp-admin-main-page', // slug parent
        'SPP Style', // header title
        'Style', // nom du sous menu
        'manage_options', // capability
        'spp-admin-style', // URL slug
        'single_post_paginate_style_page_html' // callback
    );

}






