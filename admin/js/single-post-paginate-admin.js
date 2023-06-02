(function( $ ) {
	'use strict';

	/**
	 * All of the code for your admin-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

})( jQuery );



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




	
});