<?php
/**
 * @file
 * Definition of Zurb Foundation Two column bricks Display Suite layout.
 */

function ds_zf_medarbetare_bricks() {
  return array(
    'label' => t('Enviroplanning Medarbetare'),
    'regions' => array(
      'above_left' => t('Above Left'),
      'above_right' => t('Above Right'),
      'middle' => t('Middle'),
    ),
    'image' => TRUE,
  );
}
