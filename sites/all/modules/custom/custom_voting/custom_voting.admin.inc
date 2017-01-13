<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function custom_voting_settings($form, &$form_state) {
  $form['vote_global_settings'] = array(
    '#type' => 'fieldset',
    '#title' => 'Vote Settings',
    '#description' => 'Custom settings for vote',
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );

  $form['vote_global_settings']['voting_node_type'] = array(
    '#type' => 'checkboxes',
    '#options' => node_type_get_names(),
    '#default_value' => variable_get('voting_node_type', array('article')),
  );

  $form['vote_global_settings']['vote_name'] = array(
    '#type' => 'textfield',
    '#title'=> 'Suggest name to attract user to vote',
    '#default_value' => variable_get('vote_name', array('VOTE')),
  );
  
  $form['vote_global_settings']['vote_undo'] = array(
    '#type' => 'checkbox',
    '#title' => 'Allow user to undo vote',
    '#default_value' => variable_get('vote_undo',0),
  );
  return system_settings_form($form);
}
