<?php
/*
Title: Main Menu
Post Type: cpt_main_menu
*/


piklist( 'field', array(
  'type'        => 'html',
  'field'       => 'port_thumbW',
  'label'       => 'Thumbnail Width',
  'columns'     => 2,
  'value'       => 200,
  'attributes'  => array(
  'class' => 'text'
)
) );

piklist( 'field', array(
  //'type'        => 'textarea',
  'type'        => 'editor',
  'field'       => 'port_description',
  'label'       => 'Description',
  'description' => 'Description for portfolio piece',
  'value'       => 'enter project description',
  'columns'     => 12,
  'options'     => array(
    'media_buttons' => false,
    'tinymce'       => true,
    'quicktags'     => true,
  ),
  'attributes'  => array(
    'class' => 'text'
  )
) );


// END

add_filter( 'piklist_post_types', 'main_menu_post_type' );
function main_menu_post_type( $post_types ) {
  $post_types = array_merge( $post_types, array(
    // staff
    'cpt_main_menu'   => array(
      'labels'          => array(
        'name' => __('Main Menu', 't3i'),
        'singular_name' => __('Menu Item', 't3i'),
        'add_new' => __('Add Menu Item', 't3i'),
        'add_new_item' => __('Add Menu Item', 't3i')
      ),
      'title'           => __( 'Page Title' ),
      'public'          => true,
      'has_archive'     => true,
      'hierarchical'    => true,
      'rewrite'         => array(
        'slug' => 'main'
      ),
      'capability_type' => 'page',
      'supports'        => array(
        'title',
        'thumbnail',
        'author',
        'revisions',
        'page-attributes'
      ),
      'hide_meta_box'   => array(
        'slug',
        'author',
        'revisions',
        'comments',
        'commentstatus'
      )
    )

  ) );

  return $post_types;
}
