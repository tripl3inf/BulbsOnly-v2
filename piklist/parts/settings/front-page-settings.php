<?php
/*
 Title: Location Panel Editable Content
 Setting: front_page_settings
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


piklist('field', array(
  'type' => 'text'
, 'field' => 'text'
, 'label' => 'Text Box'
, 'description' => 'Field Description'
, 'help' => 'This is help text.'
, 'value' => 'Default text'
, 'attributes' => array(
    'class' => 'text'
  )
));

piklist('field', array(
  'type' => 'select'
, 'field' => 'select'
, 'label' => 'Select Box'
, 'description' => 'Choose from the drop-down.'
, 'help' => 'This is help text.'
, 'attributes' => array(
    'class' => 'text'
  )
, 'choices' => array(
    'option1' => 'Option 1'
  , 'option2' => 'Option 2'
  , 'option3' => 'Option 3'
  )
));

piklist('field', array(
  'type' => 'colorpicker'
, 'field' => 'colorpicker'
, 'label' => 'Choose a color'
, 'value' => '#aee029'
, 'description' => 'Click in the box to select a color.'
, 'help' => 'This is help text.'
, 'attributes' => array(
    'class' => 'text'
  )
));

