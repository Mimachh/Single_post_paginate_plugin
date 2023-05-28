<?php

function createSppShortcodeHTML($atts)
{

  // Récupérer les attributs du shortcode
  $atts = shortcode_atts(
    array(
      'id' => '1',
      'name' => 'ok'
    ),
    $atts,
    'spp_pagination'
  );
 
  $nameOfTheShortcode = $atts['name'];

  // Recherche des shortcodes et de la correspondance avec le nom
  $args = array(
    'post_type' => 'spp_shortcode',
    'posts_per_page' => 1,
    'post_status' => 'publish',
    's' => $nameOfTheShortcode   
  );

  $query = new WP_Query($args);

  if ($query->have_posts()) {
      while ($query->have_posts()) {
          $query->the_post();

          $post_id = get_the_ID();
          $post_title = get_the_title();
          echo 'oui';
      }

      // Réinitialiser la requête
      wp_reset_postdata();
  } else {

      echo 'Aucune pagination ne correspond à ce shortcode !';
  }



    $pagination =
      '
        pagination shortcode
      ';
    return $pagination;
} 


add_shortcode('spp_pagination', 'createSppShortcodeHTML');