<?php

namespace Drupal\term_reference_tree\Element;

use Drupal\Core\Render\Element\FormElement;

/**
 * Provides a form element for term reference tree.
 *
 * @FormElement("checkbox_tree_item")
 */
class CheckboxTreeItem extends FormElement {

  /**
   * {@inheritdoc}
   */
  public function getInfo() {
    return [
      '#input' => FALSE,
      '#theme' => 'checkbox_tree_item',
    ];
  }

}
