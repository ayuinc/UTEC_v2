<?php

function utec_preprocess_html(&$variables) {
//    $variables['head_title'] = "New Title";
    //key-words
    $page_keywords = array(
        '#type' => 'html_tag',
        '#tag' => 'link',
        '#attributes' => array(
            'href' => 'http://fonts.googleapis.com/css?family=Roboto',
            'rel' => 'stylesheet', 'type' => 'text/css'
        )
    );
    drupal_add_css('http://fonts.googleapis.com/css?family=Roboto', array('type' => 'external'));
//    drupal_add_html_head($page_keywords, 'page_keywords');
    drupal_add_js('sites/all/themes/utec/js/handlebars-v2.0.0.js');
    if ($variables['is_front'] || drupal_get_path_alias() == 'aplica-tu-ingenio') {
        drupal_add_js('sites/all/modules/rate/rate.js');
    }
}

function utec_form_soluciones_node_form_alter(&$form, &$form_state, $form_id) {
    $nid = $form['#node']->uid;
    // add the ajax properties to the submit button
    $form['actions']['submit']['#ajax'] = array(
        'callback' => 'utec_webform_js_submit'
    );
}

function utec_webform_js_submit($form, $form_state) {
    $sid = $form_state['values']['nid'];

    $commands = array();
    if ($sid) {

        $commands[] = array(
            "command" => 'solucion_submit',
            "catid" => $form_state['values']['field_categoria']['und'][0]['target_id'],
            "nid" => $form_state['values']['nid']
        );
        // return the confirmation message

    } else {
        $commands[] = array(
            "command" => 'solucion_submit',
            "nid" => false
        );
    }
    $result = array(
        '#type' => 'ajax',
        '#commands' => $commands,
    );
    return $result;
}

function utec_form_user_login_alter(&$form, &$form_state, $form_id) {
    $form['name']['#attributes']['placeholder'] = $form['name']['#title'];
    $form['pass']['#attributes']['placeholder'] = $form['pass']['#title'];
    $form['#suffix'] = '<a class="facebook btn-login" href="'.base_path().'user/simple-fb-connect" target="_top">Loguearse con Facebook</a><p><span class="alt">&iquest;No tienes una cuenta?</span><a class="btn-crea inline-block">Registrar</a></p><p><a class="btn-rec inline-block">Recuperar contrase&ntilde;a</a></p>';
}

function utec_form_user_register_form_alter(&$form, &$form_state, $form_id) {
    $form['account']['name']['#type'] = 'textfield';
    if (isset($_POST['name'])) {
        $form['account']['name']['#value'] = $_POST['name'];
    }else{
        $form['account']['name']['#value'] = '';
    }
}

//AGREGADO
function utec_css_alter(&$css) {
  unset($css[drupal_get_path('module', 'system') . '/system.menus.css']);
  unset($css[drupal_get_path('module', 'system') . '/system.theme.css']);
}
