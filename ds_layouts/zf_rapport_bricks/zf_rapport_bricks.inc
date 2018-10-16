<?php
/**
 * @file
 * Definition of Zurb Foundation Two column bricks Display Suite layout.
 */

function ds_zf_rapport_bricks() {
  return array(
    'label' => t('Rapport'),
    'regions' => array(
    	'main_left' => t('Vänsterspalt'),
      'main_right' => t('Högerpalt'),
      'main_bottom' => t('Botten'),
    ),
    'image' => TRUE,
  );
}
