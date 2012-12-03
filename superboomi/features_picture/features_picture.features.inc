<?php
/**
 * @file
 * features_picture.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function features_picture_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "services" && $api == "services") {
    return array("version" => "3");
  }
}

/**
 * Implements hook_views_api().
 */
function features_picture_views_api() {
  return array("version" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function features_picture_node_info() {
  $items = array(
    'picture' => array(
      'name' => t('Picture'),
      'base' => 'node_content',
      'description' => t('Shared by user.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
