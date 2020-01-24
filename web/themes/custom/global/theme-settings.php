<?php

use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Theme\ThemeSettings;
use Drupal\system\Form\ThemeSettingsForm;
use Drupal\Core\Form;


function global_form_system_theme_settings_alter(&$form, Drupal\Core\Form\FormStateInterface $form_state){

  // Contact info
  $form['global_contact'] = array(
    '#type' => 'details',
    '#title' => t('Contact Info'),
    '#description' => t('Contact information is displayed in the footer'),
    '#weight' => -999,
    '#open' => FALSE,
  );
  // Email
  $form['global_contact']['global_contact_email'] = array(
    '#type' => 'textfield',
    '#title' => t('Email'),
    '#description' => t('Appears above contact information'),
    '#default_value' => theme_get_setting('global_contact_email'),
  );
  // Contact
  $form['global_contact']['global_contact_phone'] = array(
    '#type' => 'textfield',
    '#title' => t('Contact Number'),
    '#description' => t('Appears above Contact information'),
    '#default_value' => theme_get_setting('global_contact_phone'),
  );
  // Hours
  $form['global_contact']['global_open_hours'] = array(
    '#type' => 'textfield',
    '#title' => t('Open Hours'),
    '#description' => t('Appears above Open Hours information'),
    '#default_value' => theme_get_setting('global_open_hours'),
  );
  // Address
  $form['global_contact']['global_address'] = array(
    '#type' => 'textfield',
    '#title' => t('Address'),
    '#description' => t('Appears above Address'),
    '#default_value' => theme_get_setting('global_address'),
  );


  // Social Media
  $form['global_social'] = array(
    '#type' => 'details',
    '#title' => t('Social Media'),
    '#description' => t('Add Social Media'),
    '#weight' => -998,
    '#open' => FALSE,
  );
  // Facebook Link
  $form['global_social']['global_facebook'] = array(
    '#type' => 'textfield',
    '#title' => t('Facebook'),
    '#description' => t('Add Facebook Link'),
    '#default_value' => theme_get_setting('global_facebook'),
  );
  // twitter Link
  $form['global_social']['global_twitter'] = array(
    '#type' => 'textfield',
    '#title' => t('Twitter'),
    '#description' => t('Add Twitter Link'),
    '#default_value' => theme_get_setting('global_twitter'),
  );   
  // Youtube Link
  $form['global_social']['global_youtube'] = array(
    '#type' => 'textfield',
    '#title' => t('Youtube'),
    '#description' => t('Add Youtube Link'),
    '#default_value' => theme_get_setting('global_youtube'),
  );
  // Instagram Link
  $form['global_social']['global_instagram'] = array(
    '#type' => 'textfield',
    '#title' => t('Instagram'),
    '#description' => t('Add Instagram Link'),
    '#default_value' => theme_get_setting('global_instagram'),
  );
  // Github Link
  $form['global_social']['global_github'] = array(
    '#type' => 'textfield',
    '#title' => t('Github'),
    '#description' => t('Add Github Link'),
    '#default_value' => theme_get_setting('global_github'),
  );

}
