<?php
/**
 * @file
 * Definition of Zurb Foundation Two column bricks Display Suite layout.
 */

function ds_zf_medarbetare_bricks() {
  return array(
    'label' => t('Enviroplanning Medarbetare'),
    'regions' => array(
    'main_right_bild' => t('Högerpalt Bild'),
    'main_right_titel' => t('Högerpalt Titel'),
    'main_right_fakta' => t('Personalfakta i Högerspalt'),
      'main_right' => t('Högerpalt'),
      'main_left' => t('Vänsterspalt'),
    ),
    'image' => TRUE,
  );
}
