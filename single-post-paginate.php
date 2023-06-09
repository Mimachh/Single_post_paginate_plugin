<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           Single_Post_Paginate
 *
 * @wordpress-plugin
 * Plugin Name:       Single Post Paginate
 * Plugin URI:        http://example.com/plugin-name-uri/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            MimacH
 * Author URI:        http://example.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       single-post-paginate-domain
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'Single_Post_Paginate_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-plugin-name-activator.php
 */
function activate_single_post_paginate() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-single-post-paginate-activator.php';
	Single_Post_Paginate_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-plugin-name-deactivator.php
 */
function deactivate_single_post_paginate() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-single-post-paginate-deactivator.php';
	Single_Post_Paginate_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_single_post_paginate' );
register_deactivation_hook( __FILE__, 'deactivate_single_post_paginate' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-single-post-paginate.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_single_post_paginate() {

	$plugin = new Single_Post_Paginate();
	$plugin->run();

}
run_single_post_paginate();

//backend style
function enqueue_admin_spp_styles()
{
	wp_enqueue_media();
    wp_enqueue_style('SPP-admin-style', plugin_dir_url(__FILE__) . 'admin/css/single-post-paginate-admin.css');
	wp_enqueue_script('SPP-admin-js', plugin_dir_url(__FILE__) . 'admin/js/single-post-paginate-admin.js');
}
add_action('admin_enqueue_scripts', 'enqueue_admin_spp_styles');

//frontend style
function enqueue_public_spp_styles()
{
    wp_enqueue_style('SPP-public-style', plugin_dir_url(__FILE__) . 'public/css/single-post-paginate-public.css');
    wp_enqueue_script('SPP-public-js', plugin_dir_url(__FILE__) . 'public/js/single-post-paginate-public.js');
}
add_action('wp_enqueue_scripts', 'enqueue_public_spp_styles');


//shadow box pagination
require_once plugin_dir_path(__FILE__) . 'public/partials/shadows/single-post-paginate-public-shadow-box.php';

//shadow border pagination
require_once plugin_dir_path(__FILE__) . 'public/partials/borders/single-post-paginate-public-borders.php';
require_once plugin_dir_path(__FILE__) . 'public/partials/borders/single-post-paginate-public-borders-color.php';

//shadow main colors
require_once plugin_dir_path(__FILE__) . 'public/partials/colors/single-post-paginate-colors.php';

// text choice
require_once plugin_dir_path(__FILE__) . 'public/partials/text/single-post-paginate-public-text.php';

// image choice
require_once plugin_dir_path(__FILE__) . 'public/partials/image/single-post-paginate-image-choosen.php';

require_once plugin_dir_path(__FILE__) . 'includes/single-post-paginate-functions.php';
require_once plugin_dir_path(__FILE__) . 'includes/single-post-paginate-options-settings.php';
require_once plugin_dir_path(__FILE__) . 'includes/single-post-paginate-style-settings.php';
require_once plugin_dir_path(__FILE__) . 'public/single-post-paginate-ifWrapSPP.php';

// Shortcode
require_once plugin_dir_path(__FILE__) . 'admin/spp-custom-post-type/init.php';
require_once plugin_dir_path(__FILE__) . 'admin/spp-custom-post-type/custom-fields/activation/init.php';
require_once plugin_dir_path(__FILE__) . 'admin/spp-custom-post-type/custom-fields/activation/form.php';

require_once plugin_dir_path(__FILE__) . 'public/shortcode/create-spp-shortcode.php';