<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

drupal_add_js(drupal_get_path('module', 'plusone') . '/plusone.js');
drupal_add_css(drupal_get_path('module', 'plusone') .'/plusone.css');
// build the output structure
$output = '<div class="plusone-widget">';
$output .= '<div class="score">' . $total . '</div>';
$output .= '<div class="vote">';
// Based on the attributes – display the appropriate label
// below the vote count.
if ($is_author) {
// User is author; not allowed to vote.
  $output .= t('Votes');
}
elseif ($voted > 0) {
// User already voted; not allowed to vote again.
  $output .= t('You voted');
}
else {
// User is eligible to vote.
  $output .= l(t('Vote'), "plusone/vote/$nid", array(
    'attributes' => array('class' => 'plusone-link')
  ));
}
$output .= '</div>'; // Close div with class "vote".
$output .= '</div>'; // Close div with class "plusone-widget".
print $output;
