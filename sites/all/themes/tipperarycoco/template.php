<?php

/**
 * @file template.php
 */

function tipperarycoco_form_alter(&$form, &$form_state, $form_id) {
  if ($form_id == 'search_block_form') {
    $form['search_block_form']['#title'] = t('FIND IT'); // Change the text on the label element
    $form['search_block_form']['#title_display'] = 'invisible'; // Toggle label visibilty
    $form['search_block_form']['#size'] = 10;  // define size of the textfield
    // $form['search_block_form']['#default_value'] = t('FIND IT'); // Set a default value for the textfield
    // $form['actions']['submit']['#value'] = t('GO!'); // Change the text on the submit button
	if (!drupal_is_front_page()): 
    $form['actions']['submit'] = array('#type' => 'image_button', '#src' => base_path() . path_to_theme() . '/tiles/images/search.png');
	endif;
    // Add extra attributes to the text box
    $form['search_block_form']['#attributes']['onblur'] = "if (this.value == '') {this.value = 'FIND IT';}";
    $form['search_block_form']['#attributes']['onfocus'] = "if (this.value == 'FIND IT') {this.value = '';}";
    // Prevent user from searching the default text
    $form['#attributes']['onsubmit'] = "if(this.search_block_form.value=='FIND IT'){ alert('Please enter a search'); return false; }";
    // Alternative (HTML5) placeholder attribute instead of using the javascript
    $form['search_block_form']['#attributes']['placeholder'] = t('FIND IT');
  }
}

function tipperarycoco_preprocess_search_result(&$variables) {
  // Remove user name and modification date from search results DMW 24032014
  $variables['info'] = '';
}


