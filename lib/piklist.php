<?php


add_filter('piklist_admin_pages', 'piklist_theme_setting_pages');
function piklist_theme_setting_pages($pages)
{
  $pages[] = array(
    'page_title' => __('Customize Front Page')
  ,'menu_title' => __('Front Page', 'piklist')
  ,'sub_menu' => 'themes.php' //Under Appearance menu
  ,'capability' => 'manage_options'
  ,'menu_slug' => 'fp_settings'
  ,'setting' => 'front_page_settings'
  ,'menu_icon' => plugins_url('piklist/parts/img/piklist-icon.png')
  ,'page_icon' => plugins_url('piklist/parts/img/piklist-page-icon-32.png')
  ,'single_line' => true
  ,'default_tab' => 'Basic'
  ,'save_text' => 'Save Settings'
  );

  return $pages;
}
