<?php

/* Minimum Custom Taxonomy */

/* Tipovi jedinica */

function ct_jedinice_tip() {
  // Add new "Tipovi jedinica" taxonomy to Posts
  register_taxonomy('tip-jedinice', 'jedinice', array(
    // Hierarchical taxonomy (like categories)
    'hierarchical' => true,
    // This array of options controls the labels displayed in the WordPress Admin UI
    'labels' => array(
      'name' => __( 'Tipovi jedinica', 'bonestheme' ),
      'singular_name' => __( 'Tip jedinice', 'bonestheme' ),
      'search_items' =>  __( 'Pretraži tipove jedinica', 'bonestheme' ),
      'all_items' => __( 'Svi tipovi jedinica', 'bonestheme' ),
      'parent_item' => __( 'Nadređeni tip jedinice', 'bonestheme' ),
      'parent_item_colon' => __( 'Nadređeni tip jedinice:', 'bonestheme' ),
      'edit_item' => __( 'Izmijeni tip jedinice', 'bonestheme' ),
      'update_item' => __( 'Osvježi tip jedinice', 'bonestheme' ),
      'add_new_item' => __( 'Dodaj novi tip jedinice', 'bonestheme' ),
      'new_item_name' => __( 'Naziv novog tipa jedinice', 'bonestheme' ),
      'menu_name' => __( 'Tipovi jedinica', 'bonestheme' ),
    ),
    // Control the slugs used for this taxonomy
    'rewrite' => array(
      'slug' => 'tip-jedinice', // This controls the base slug that will display before each term
      'with_front' => false, // Don't display the category base before "/locations/"
      'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
    ),
  ));
}

add_action( 'init', 'ct_jedinice_tip', 0 );
register_taxonomy_for_object_type( 'tip-jedinice', 'jedinice' );

?>