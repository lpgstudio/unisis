<?php

// Carregar o arquivo do model
function loadModel($modelName){
    require_once(MODEL_PATH . "/{$modelName}.php");
}

// Carregar o arquivo do views recebendo nome e parâmetros em array
function loadView($viewName, $params = array()){
    if(count($params) > 0){
        foreach($params as $key => $value){
            if(strlen($key) > 0){
                ${$key} = $value;
            }
        }
    }
    require_once(VIEW_PATH . "/{$viewName}.php");
}

// Carregar o Template recebendo nome e parâmetros em array
function loadTemplateView($viewName, $params = array()){
    if(count($params) > 0){
        foreach($params as $key => $value){
            if(strlen($key) > 0){
                ${$key} = $value;
            }
        }
    }

    $user = @$_SESSION['user'];

    // Montando o Layout do site
    require_once(TEMPLATE_PATH . "/header.php");
    require_once(TEMPLATE_PATH . "/sidebar.php");
    require_once(TEMPLATE_PATH . "/menu.php");
    require_once(VIEW_PATH . "/{$viewName}.php");
    require_once(TEMPLATE_PATH . "/footer.php");
}

