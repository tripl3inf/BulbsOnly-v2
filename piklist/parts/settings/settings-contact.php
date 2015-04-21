<?php
/*
 Title: Contact Panel Editable Content
 Setting: front_page_settings
 Tab: Contact
 */

piklist('field', array(
  'type' => 'editor'
, 'scope' => 'post'
, 'field' => 'editable-location-panel'
, 'label' => __('Example Field')
, 'description' => __('This is a description of the field.')
, 'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
, 'options' => array(
    'wpautop' => true
  , 'media_buttons' => true
  , 'tabindex' => ''
  , 'editor_css' => ''
  , 'editor_class' => ''
  , 'teeny' => false
  , 'dfw' => false
  , 'tinymce' => true
  , 'quicktags' => true
  )
));



