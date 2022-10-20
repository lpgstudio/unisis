<?php

session_start();
requireValidSession();

$user_id = $_SESSION['user']->id;
$marcas = Marca::getAll($user_id);
loadTemplateView('cadastrar-produtos', ['marcas' => $marcas]);