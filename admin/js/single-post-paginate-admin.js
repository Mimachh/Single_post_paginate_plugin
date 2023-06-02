document.addEventListener('DOMContentLoaded', function(event) {
    // Récupérer l'élément de commutation (input switch) pour l'activation de la pagination
    var activateSwitch = document.getElementById('spp_activate_pagination');

    // Vérifier si l'élément de commutation pour l'activation de la pagination existe
    if (activateSwitch) {
        // Récupérer les éléments des champs de saisie liés à la localisation et au template
        var localisationField = document.querySelector('.spp-input-field select[name="spp_localisation_pagination"]');
        var templateField = document.querySelector('.spp-input-field .spp-radio-template-div');
		var displayFieldsContainers = document.getElementsByClassName('spp_displayFieldsContainer');

        // Fonction pour cacher les champs de saisie et les boutons du template
        function hideFields() {
            localisationField.style.display = 'none';
            templateField.style.display = 'none';
			for (var i = 0; i < displayFieldsContainers.length; i++) {
                displayFieldsContainers[i].textContent = "La Pagination est désactivée !";
            }
        }

        // Fonction pour afficher les champs de saisie et les boutons du template
        function showFields() {
            localisationField.style.display = 'block';
            templateField.style.display = 'block';

			// Parcourir les éléments de la collection et vider le texte individuellement
			for (var i = 0; i < displayFieldsContainers.length; i++) {
				displayFieldsContainers[i].textContent = "";
			}
        }

        // Événement de changement pour le switch d'activation de la pagination
        activateSwitch.addEventListener('change', function() {
            if (activateSwitch.checked) {
                showFields();
            } else {
                hideFields();
            }
        });

        // Vérifier l'état initial du switch au chargement de la page
        if (!activateSwitch.checked) {
            hideFields();
        }
    }


	// STYLE PAGE
	
    // Récupérer l'élément de commutation (input switch) pour la box shadow
    var shadowSwitch = document.getElementById('spp_shadow_box_switch');

    // Vérifier si l'élément de commutation pour la box shadow existe
    if (shadowSwitch) {
        // Récupérer les champs de saisie liés à la box shadow
        var shadowColorInput = document.getElementById('spp_shadow_box_color');
        var shadowSizeInput = document.getElementById('spp_shadow_box_size');
        var shadowTypeInput = document.getElementById('spp_shadow_box_type');
        var shadowFieldsContainers = document.getElementsByClassName('spp_shadowFieldsContainer');

        // Fonction pour cacher les champs de saisie et afficher le texte
        function hideShadowFields() {
            shadowColorInput.style.display = 'none';
            shadowSizeInput.style.display = 'none';
            shadowTypeInput.style.display = 'none';

            // Parcourir les éléments de la collection et définir le texte individuellement
            for (var i = 0; i < shadowFieldsContainers.length; i++) {
                shadowFieldsContainers[i].textContent = "La shadow box n'est pas activée";
            }
        }

        // Fonction pour afficher les champs de saisie et vider le texte
        function showShadowFields() {
            shadowColorInput.style.display = 'block';
            shadowSizeInput.style.display = 'block';
            shadowTypeInput.style.display = 'block';

            // Parcourir les éléments de la collection et vider le texte individuellement
            for (var i = 0; i < shadowFieldsContainers.length; i++) {
                shadowFieldsContainers[i].textContent = "";
            }
        }

        // Événement de changement pour le switch de la box shadow
        shadowSwitch.addEventListener('change', function() {
            if (shadowSwitch.checked) {
                showShadowFields();
            } else {
                hideShadowFields();
            }
        });

        // Vérifier l'état initial du switch au chargement de la page
        if (!shadowSwitch.checked) {
            hideShadowFields();
        }
    }

    // Cacher le choix de l'image si non actif
    var chooseImageButton = document.querySelector('.spp-choose-image-button');
    var changeImageButton = document.querySelector('.spp-change-image-button');
    var removeImageButton = document.querySelector('.remove-image-button');
    var bgImageInput = document.querySelector('#sppbgImage');
    var previewImage = document.querySelector('.spp-preview-image');
    var sppImageChooseDivHideByDefault = document.querySelector('.spp-input-field-img-choose');
    sppImageChooseDivHideByDefault.style.display = 'none';
    var sppImageSwitch = document.getElementById('spp_image_switch');

    if (sppImageSwitch.checked) {
        showImageFields();
    } else {
        hideImageFields();
    }
    sppImageSwitch.addEventListener('change', function() {
        if (sppImageSwitch.checked) {
            showImageFields();
        } else {
            hideImageFields();
        }
    });


    function hideImageFields() {
        sppImageChooseDivHideByDefault.style.display = 'none';
    }
    function showImageFields() {
        sppImageChooseDivHideByDefault.style.display = 'flex';

    }


    if (chooseImageButton) {
        chooseImageButton.addEventListener('click', function(e) {
            e.preventDefault();
            var mediaUploader = wp.media({
                title: '<?php esc_html_e("Choisir une image", "single-post-paginate-domain"); ?>',
                multiple: false
            });

            mediaUploader.on('select', function() {
                var selectedImage = mediaUploader.state().get('selection').first().toJSON();
                var imageUrl = selectedImage.url;
                bgImageInput.value = imageUrl;
                previewImage.src = imageUrl;
            });

            mediaUploader.open();
        });
    }

    if (changeImageButton) {
        changeImageButton.addEventListener('click', function(e) {
            e.preventDefault();
            var mediaUploader = wp.media({
                title: '<?php esc_html_e("Changer l\'image", "single-post-paginate-domain"); ?>',
                multiple: false
            });

            mediaUploader.on('select', function() {
                var selectedImage = mediaUploader.state().get('selection').first().toJSON();
                var imageUrl = selectedImage.url;
                bgImageInput.value = imageUrl;
                previewImage.src = imageUrl;
            });

            mediaUploader.open();
        });
    }

    if (removeImageButton) {
        removeImageButton.addEventListener('click', function(e) {
            e.preventDefault();
            bgImageInput.value = '';
            previewImage.src = '';
        });
    }


    // Is image link
    var isImageLink = document.querySelector('.spp_is_custom_img_link');
    var sppImageChooseLinkDiv = document.querySelector('.spp-choose-type-of-link-div');
    var sppImageEnterLinkDiv = document.querySelector('.spp_custom_logo_link_div');
	var sppImageChooseLinkInput = document.querySelector('.spp_is_custom_img_link_to_home');
    var sppCustomLogoLink = document.querySelector('.spp_custom_logo_link');

    sppImageChooseLinkDiv.style.display = 'none';

    if (isImageLink.checked) {
        ShowImageLinkToChooseField(sppImageChooseLinkDiv);
    } else {
        hideImageLinkToChooseField(sppImageChooseLinkDiv, sppImageChooseLinkInput);
        hideImageLinkToChooseField(sppImageEnterLinkDiv, sppCustomLogoLink);
    }

    isImageLink.addEventListener('change', function() {
        if (isImageLink.checked) {
            ShowImageLinkToChooseField(sppImageChooseLinkDiv);
        } else {
            hideImageLinkToChooseField(sppImageChooseLinkDiv, sppImageChooseLinkInput);
            hideImageLinkToChooseField(sppImageEnterLinkDiv, sppCustomLogoLink);
        }
    });


    function hideImageLinkToChooseField(element, elementInput) {
        element.style.display = 'none';
        elementInput.checked = false;
        elementInput.value = '';
    }
    function ShowImageLinkToChooseField(element) {
        element.style.display = 'block';

    }

    sppImageEnterLinkDiv.style.display = 'none';
    if (sppImageChooseLinkInput.checked) {
        ShowImageLinkToChooseField(sppImageEnterLinkDiv);
    } else {
        hideImageLinkToChooseField(sppImageEnterLinkDiv, sppCustomLogoLink);
    }
    sppImageChooseLinkInput.addEventListener('change', function() {
        if (sppImageChooseLinkInput.checked) {
            ShowImageLinkToChooseField(sppImageEnterLinkDiv);
        } else {
            hideImageLinkToChooseField(sppImageEnterLinkDiv, sppCustomLogoLink);
        }
    });
});