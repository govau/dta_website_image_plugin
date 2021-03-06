<?php

namespace Drupal\dta_website_image_plugin\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "Enhanced Image" plugin.
 *
 * @CKEditorPlugin(
 *   id = "image2",
 *   label = @Translation("Image 2")
 * )
 */
class DtaWebsiteImagePlugin extends CKEditorPluginBase {

  /**
   * {@inheritdoc}
   */
  public function getFile() {
    return base_path() . 'libraries/image2/plugin.js';
  }

  /**
   * {@inheritdoc}
   */

  public function getLibraries(Editor $editor) {
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function getButtons() {
    return [
    'Image' => [
      'label' => t('image'),
      'image' => base_path() . 'libraries/image2/icons/image.png',
    ]
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getConfig(Editor $editor) {
    return [];
  }

  /**
   * Return ckeditor image2 'Enhanced Image' plugin path relative to drupal root.
   *
   * @return string
   *   Relative path to the ckeditor plugin folder
   */
  private function getPluginPath() {
    return 'libraries/image2';
  }

}
