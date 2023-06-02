<?php

function single_post_paginate_shortcode_page_html() { ?>
    <div class="spp-bg-color-primary spp-screen-wrap">
        <div class="wrap">
            <h1>Créer mon shortcode de pagination</h1>
            <small>Remplissez le formulaire pour créer une pagination personnalisée que vous pourrez placer où vous voulez sur votre site.</small>
            
            <!-- GENERAL -->
            <h2 class="my-4">Général</h2>
                <div class="spp-input-field spp-input-field-shortcode mb-4">
                    <label for="spp_activate_pagination_shortcode">Activer le Shortcode</label>
                    <label class="switch">
                        <input name="spp_activate_pagination_shortcode" 
                        type="checkbox" 
                        id="spp_activate_pagination_shortcode"
                        >
                        <span class="slider round"></span>
                    </label>
                </div>
                <?php
                $template1 = plugin_dir_url(dirname(__FILE__)) . '/assets/images/templates/template 1.PNG';
                $template2 = plugin_dir_url(dirname(__FILE__)) . '/../assets/images/templates/template 2.PNG';
                $template3 = plugin_dir_url(dirname(__FILE__)) . '/../assets/images/templates/template 3.PNG';
                $template4 = plugin_dir_url(dirname(__FILE__)) . '/../assets/images/templates/template 4.PNG';
                $templatePremium = plugin_dir_url(dirname(__FILE__)) . '/../assets/images/templates/premium.PNG';
                ?>
                <div class="spp-input-field spp-input-field-shortcode-template spp-radio-template-div-shortcode-hidden-by-default my-4">
                    <label for="spp_template_pagination_shortcode">Choix du template : </label>
                    <div class="spp-radio-template-div">
                        <label class="spp-radio-label">
                            <input type="radio" name="spp_template_pagination_shortcode" value="1" <?php checked(esc_html(get_option('spp_template_pagination_shortcode') == 1)); ?>>
                            <img src="<?php echo $template1; ?>" alt="Template 1">
                        </label>

                        <label class="spp-radio-label">
                            <input type="radio" name="spp_template_pagination_shortcode" value="2" <?php checked(esc_html(get_option('spp_template_pagination_shortcode') == 2)); ?> >
                            <img src="<?php echo $template2; ?>" alt="Template 2">
                        </label>

                        <label class="spp-radio-label">
                            <input type="radio" name="spp_template_pagination_shortcode" value="3" <?php checked(esc_html(get_option('spp_template_pagination_shortcode') == 3)); ?>>
                            <img src="<?php echo $template3; ?>" alt="Template 3">
                        </label>

                        <label class="spp-radio-label">
                            <input type="radio" name="spp_template_pagination_shortcode" value="4" <?php checked(esc_html(get_option('spp_template_pagination_shortcode') == 4)); ?>>
                            <img src="<?php echo $template4; ?>" alt="Template 4">
                        </label>

                        <label class="spp-radio-label spp-radio-template-premium">
                            <input type="radio" name="spp_template_pagination_shortcode" value="5" disabled>
                            <img src="<?php echo $templatePremium; ?>" alt="Template 5">
                        </label>
                    </div>
                    <div class="spp_displayFieldsContainer"></div>
                </div>
                <div class="spp-input-field spp-input-field-shortcode my-4">
                    <label for="spp_choose_pagination_text_shortcode">Afficher le titre des postes</label>
                    <label class="switch">
                        <input name="spp_choose_pagination_text_shortcode" 
                        type="checkbox" 
                        id="spp_choose_pagination_text_shortcode"
                        >
                        <span class="slider round"></span>
                    </label>
                    <label for="spp_choose_pagination_text_shortcode">Choisir un texte personnalisé</label>
                </div>
                <div class="spp-input-field spp-input-field-shortcode my-4">
                    <label for="spp_choose_pagination_left_text_shortcode">Texte gauche</label>
                    <input class="input" type="text" placeholder="<?php esc_html_e('Précédent', 'single-post-paginate-domain'); ?>">
                </div>
                <div class="spp-input-field spp-input-field-shortcode my-4">
                    <label for="spp_choose_pagination_right_text_shortcode">Texte droite</label>
                    <input class="input" type="text" placeholder="<?php esc_html_e('Suivant', 'single-post-paginate-domain'); ?>">
                </div>

            <!-- COLORS -->
            <div class="my-4">
                <h2>Couleurs</h2>
                <p>Choisissez la palette de couleur de votre pagination.</p>
            </div>
            <div class="spp-input-field spp-input-field-shortcode">
                <label for="spp_bg_color_pagination_shortcode">Couleur de l'arrière plan : </label>
                <input name="spp_bg_color_pagination_shortcode" type="color" id="colorPicker" value="<?php echo esc_html(get_option('spp_bg_color_pagination_shortcode'), "#fff000"); ?>">
            </div>
            <div class="spp-input-field spp-input-field-shortcode my-4">
                <label for="spp_text_color_pagination_shortcode">Couleur du texte : </label>
                <input name="spp_text_color_pagination_shortcode" type="color" id="colorPicker" value="<?php echo esc_html(get_option('spp_text_color_pagination_shortcode'), "#fff000"); ?>">
            </div>
            <div class="spp-input-field spp-input-field-shortcode my-4">
                <label for="spp_arrow_color_pagination_shortcode">Couleur des flèches : </label>
                <input name="spp_arrow_color_pagination_shortcode" type="color" id="colorPicker" value="<?php echo esc_html(get_option('spp_arrow_color_pagination_shortcode'), "#fff000"); ?>">
            </div>

            <!-- BORDERS -->
            <div class="my-4">
                <h2>Bordures</h2>
                <p>Choisissez le style de vos bordures.</p>
            </div>
            <div class="spp-input-field spp-input-field-shortcode">
                <label for="spp_border_radius_pagination_shortcode">Border radius : </label>
                <input class="input" name="spp_border_radius_pagination_shortcode" type="number" min="0" value="<?php echo esc_attr( get_option('spp_border_radius_pagination_shortcode', "0") ); ?>" >
                px
            </div>
            <div class="spp-input-field spp-input-field-shortcode my-4">
                <label for="spp_border_thickness_pagination_shortcode">Epaisseur : </label>
                <input class="input" name="spp_border_thickness_pagination_shortcode" type="number" min="0" value="<?php echo esc_attr( get_option('spp_border_thickness_pagination_shortcode', "0") ); ?>" >
                px
            </div>
            <div class="spp-input-field spp-input-field-shortcode my-4">
                <?php $border_style = esc_attr(get_option('spp_border_style_pagination_shortcode', 'solid')); ?>
                <label for="spp_border_style_pagination_shortcode">Style de bordure : </label>
                <select  name="spp_border_style_pagination_shortcode">
                    <option value="solid" <?php selected($border_style, 'solid'); ?>><?php esc_html_e('Solide', 'single-post-paginate-domain'); ?></option>
                    <option value="dashed" <?php selected($border_style, 'dashed'); ?>><?php esc_html_e('Haché', 'single-post-paginate-domain'); ?></option>
                    <option value="dotted" <?php selected($border_style, 'dotted'); ?>><?php esc_html_e('En pointillés', 'single-post-paginate-domain'); ?></option>
                </select>
            </div>
            <?php
            $border_color = esc_attr(get_option('spp_border_color_pagination_shortcode', '#000000'));
            ?>
            <div class="spp-input-field spp-input-field-shortcode my-4">
                <label for="spp_border_color_pagination_shortcode">Couleur : </label>
                <input name="spp_border_color_pagination_shortcode" type="color" value="<?php echo $border_color; ?>">
            </div>

            <!-- SHADOWS -->
            <div class="my-4">
                <h2>Ombres</h2>
                <p>Choisissez le style d'ombre.</p>
            </div>
            <div class="spp-input-field spp-input-field-shortcode">
                <label for="spp_shadow_box_enabled_shortcode">Activer l'ombre</label>
                <label class="switch">
                    <input name="spp_shadow_box_enabled_shortcode" 
                    type="checkbox" 
                    id="spp_shadow_box_enabled_shortcode"
                    >
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="spp-input-field spp-input-field-shortcode my-4">
                <label for="spp_shadow_box_type_shortcode">Style d'ombre</label>
                <label>
                    <input name="spp_shadow_box_type_shortcode" type="radio" value="inner">
                    <?php esc_html_e('Inner', 'single-post-paginate-domain'); ?>
                </label>
                <label>
                    <input name="spp_shadow_box_type_shortcode" type="radio" value="outter">
                    <?php esc_html_e('Outter', 'single-post-paginate-domain'); ?>
                </label>
            </div>
            <div class="spp-input-field spp-input-field-shortcode my-4">
                <label for="spp_shadow_box_size_shortcode">Taille</label>
                <select name="spp_shadow_box_size_shortcode">
                    <option value="small"><?php esc_html_e('Petit', 'single-post-paginate-domain'); ?></option>
                    <option value="medium"><?php esc_html_e('Moyen', 'single-post-paginate-domain'); ?></option>
                    <option value="large"><?php esc_html_e('Grand', 'single-post-paginate-domain'); ?></option>
                </select>
            </div>
            <div class="spp-input-field spp-input-field-shortcode my-4">
                <label for="spp_shadow_box_color_shortcode">Couleur : </label>
                <input name="spp_shadow_box_color_shortcode" type="color">
            </div>

            <!-- Points -->
            <div class="my-4">
                <h2>Points</h2>
                <p>Choisissez la couleur des points pour votre template.</p>
            </div>
            <div class="spp-input-field spp-input-field-shortcode" id="spp_big_point_color_pagination_shortcode">
                <label for="spp_small_points_color_pagination_shortcode">Points secondaires : </label>
                <input type="color" name="spp_small_points_color_pagination_shortcode" value="<?php echo esc_attr($smallDotsColor); ?>">
            </div>
            <div class="spp-input-field spp-input-field-shortcode my-4" id="spp_big_point_color_pagination_shortcode">
                <label for="spp_big_point_color_pagination_shortcode">Point principal : </label>
                <input type="color" name="spp_big_point_color_pagination_shortcode" value="<?php echo esc_attr($smallDotsColor); ?>">
            </div>
            <!-- URL -->
            <div class="my-4">
                <h2>Url</h2>
                <p>Personnaliser vos URL's.</p>
            </div>
            <div class="spp-input-field spp-input-field-shortcode-url">
                <label for="spp_choose_pagination_url_shortcode">Utiliser les URL's par défaut * &nbsp;&nbsp;</label>
                <label class="switch">
                    <input name="spp_choose_pagination_url_shortcode" 
                    type="checkbox"
                    id="spp_choose_pagination_url_shortcode"
                    >
                    <span class="slider round"></span>
                    </label>
                <label for="spp_choose_pagination_text_shortcode my-4">&nbsp;&nbsp;Choisir des URL's personnalisées</label>
                <div>
                    <small>* gauche = post précédent / droite = post suivant</small>
                </div>
            </div>
            <div class="spp-input-field spp-input-field-shortcode my-4">
                <label for="spp_choose_pagination_left_url_shortcode">URL gauche </label>
                <input class="input" type="text" placeholder="<?php esc_html_e('Entrer votre URL personnalisée', 'single-post-paginate-domain'); ?>">
            </div>
            <div class="spp-input-field spp-input-field-shortcode my-4">
                <label for="spp_choose_pagination_urt_text_shortcode"> URL droite</label>
                <input class="input" type="text" placeholder="<?php esc_html_e('Entrer votre URL personnalisée', 'single-post-paginate-domain'); ?>">
            </div>
            <button class="button is-info is-normal my-4">
                <span class="icon is-small">
                    <i class="fas fa-check"></i>
                </span>
                <span>Enregistrer</span>
            </button>
        </div>
    </div>
<?php }