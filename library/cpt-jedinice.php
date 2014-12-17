<?php

/* Minimum Custom Post Type */

/* Jedinice */

// let's create the function for the custom type
function cpt_jedinice() { 
  // creating (registering) the custom type 
  register_post_type( 'jedinice', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
    // let's now add all the options for this post type
    array( 'labels' => array(
      'name' => __( 'Jedinice', 'bonestheme' ), /* This is the Title of the Group */
      'singular_name' => __( 'Jedinica', 'bonestheme' ), /* This is the individual type */
      'all_items' => __( 'Sve Jedinice', 'bonestheme' ), /* the all items menu item */
      'add_new' => __( 'Dodaj novu', 'bonestheme' ), /* The add new menu item */
      'add_new_item' => __( 'Dodaj novu Jedinicu', 'bonestheme' ), /* Add New Display Title */
      'edit' => __( 'Uredi', 'bonestheme' ), /* Edit Dialog */
      'edit_item' => __( 'Uredi Jedinicu', 'bonestheme' ), /* Edit Display Title */
      'new_item' => __( 'Nova jedinica', 'bonestheme' ), /* New Display Title */
      'view_item' => __( 'Pregledaj Jedinicu', 'bonestheme' ), /* View Display Title */
      'search_items' => __( 'Pretraži Jedinice', 'bonestheme' ), /* Search Custom Type Title */ 
      'not_found' =>  __( 'Ništa nije pronađeno u bazi.', 'bonestheme' ), /* This displays if there are no entries yet */ 
      'not_found_in_trash' => __( 'Ništa nije pronađeno u smeću', 'bonestheme' ), /* This displays if there is nothing in the trash */
      'parent_item_colon' => ''
      ), /* end of arrays */
      'description' => __( 'Jedinice Custom Post Type', 'bonestheme' ), /* Custom Type Description */
      'public' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => false,
      'show_ui' => true,
      'query_var' => true,
      'menu_position' => 5, /* this is what order you want it to appear in on the left hand side menu */ 
      'menu_icon' => 'dashicons-admin-page', /* the icon for the custom post type menu */
      'rewrite' => array( 'slug' => 'jedinice', 'with_front' => false ), /* you can specify its url slug */
      'has_archive' => 'jedinice', /* you can rename the slug here */
      'capability_type' => 'post',
      'hierarchical' => false,
      /* the next one is important, it tells what's enabled in the post editor */
      'supports' => array( 'title' ) /* 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes', 'post-formats' */
    ) /* end of options */
  ); /* end of register post type */
  
  /* this adds your post categories to your custom post type */
  // register_taxonomy_for_object_type( 'category', 'services' );
  /* this adds your post tags to your custom post type */
  // register_taxonomy_for_object_type( 'post_tag', 'services' );
  
} 

  // adding the function to the Wordpress init
  add_action( 'init', 'cpt_jedinice');
  
?>
