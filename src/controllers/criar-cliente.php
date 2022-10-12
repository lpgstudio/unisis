<?php

session_start();
requireValidSession();

$id = $_SESSION['user']->id;
$nome = $_SESSION['user']->username;

loadTemplateView('criar-cliente', ['nome' => $nome]);