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
<?php }