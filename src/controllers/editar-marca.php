<?php

session_start();
requireValidSession();

$user_id = $_SESSION['user']->id;
$marca_id = filter_var($_REQUEST['codigo'], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_LOW);

$listaMarca = Marca::oneMarca($user_id, $marca_id);

loadTemplateView('editar-marcas', [
    'editMarcaList' => $listaMarca
]);