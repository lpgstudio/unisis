<?php

session_start();
requireValidSession();

$user_id = $_SESSION['user']->id;

$listaMarcas = Marca::getAll($user_id);

loadTemplateView('marcas', [
    'marcas' => $listaMarcas
]);