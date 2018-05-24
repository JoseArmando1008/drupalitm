<?php

namespace Drupal\drupal_itm_demos\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class DemoController.
 */
class DemoController extends ControllerBase {

  /**
   * Testtheme.
   *
   * @return string
   *   Return Hello string.
   */
  public function testTheme() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: testTheme')
    ];
  }

}
