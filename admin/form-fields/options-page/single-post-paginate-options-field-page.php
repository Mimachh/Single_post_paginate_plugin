<?php

function spp_settings_section_callback() { ?>
    <p class="description"><?php echo esc_html__('Créer ici la pagination de vos Articles.', 'single-post-paginate-domain') ?></p>
<?php }

function sppActivateFieldHTML() { ?>
    <div class="spp-input-field">
        <label class="switch">
            <input name="spp_activate_pagination" 
            type="checkbox" 
            value="activate"
            <?php checked(esc_html(get_option('spp_activate_pagination') === 'activate')); ?>
            id="spp_activate_pagination"
            >
            <span class="slider round"></span>
        </label>
    </div>
<?php }

function sppLocalisationFieldHTML() { ?>
    <div class="spp-input-field">
        <select name="spp_localisation_pagination">
            <option value="0" <?php selected(esc_html(get_option('spp_localisation_pagination'))); ?>><?php echo esc_html__('Fin du contenu', 'single-post-paginate-domain') ?></option>
            <option value="1" <?php selected(esc_html(get_option('spp_localisation_pagination'))); ?>><?php echo esc_html__('Debut du contenu', 'single-post-paginate-domain') ?></option>
        </select>
    </div>
    <div class="spp_displayFieldsContainer"></div>
<?php }

function sppTemplateFieldHTML() { 
    $template1 = plugin_dir_url(dirname(__FILE__)) . '../../assets/images/templates/template 1.PNG';
    $template2 = plugin_dir_url(dirname(__FILE__)) . '../../assets/images/templates/template 2.PNG';
    $template3 = plugin_dir_url(dirname(__FILE__)) . '../../assets/images/templates/template 3.PNG';
    $template4 = plugin_dir_url(dirname(__FILE__)) . '../../assets/images/templates/template 4.PNG';
    $templatePremium = plugin_dir_url(dirname(__FILE__)) . '../../assets/images/templates/premium.PNG';
    ?>
    <div class="spp-input-field">
        <div class="spp-radio-template-div">
            <label class="spp-radio-label">
                <input type="radio" name="spp_template_pagination" value="1" <?php checked(esc_html(get_option('spp_template_pagination') == 1)); ?>>
                <img src="<?php echo $template1; ?>" alt="Template 1">
            </label>

            <label class="spp-radio-label">
                <input type="radio" name="spp_template_pagination" value="2" <?php checked(esc_html(get_option('spp_template_pagination') == 2)); ?> >
                <img src="<?php echo $template2; ?>" alt="Template 2">
            </label>

            <label class="spp-radio-label">
                <input type="radio" name="spp_template_pagination" value="3" <?php checked(esc_html(get_option('spp_template_pagination') == 3)); ?>>
                <img src="<?php echo $template3; ?>" alt="Template 3">
            </label>

            <label class="spp-radio-label">
                <input type="radio" name="spp_template_pagination" value="4" <?php checked(esc_html(get_option('spp_template_pagination') == 4)); ?>>
                <img src="<?php echo $template4; ?>" alt="Template 4">
            </label>

            <label class="spp-radio-label spp-radio-template-premium">
                <input type="radio" name="spp_template_pagination" value="5" disabled>
                <img src="<?php echo $templatePremium; ?>" alt="Template 5">
            </label>
        </div>
        <div class="spp_displayFieldsContainer"></div>
    </div>
<?php }