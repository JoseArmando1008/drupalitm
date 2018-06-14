<?php

namespace Drupal\itm_lab3\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'timestamp' block.
 *
 * @Block(
 *  id = "timestamp",
 *  admin_label = @Translation("Timestamp"),
 * )
 */
class timestamp extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['information_time_block']['#markup'] = format_date(\Drupal::time()->getRequestTime(), 'long');

    return $build;
  }

  /**
   * {@inheritdoc}
   */
  function format_date($timestamp, $type) {
  return \Drupal::service('date.formatter')->format($timestamp, $type);
  }
    
    

}
