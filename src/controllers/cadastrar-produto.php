<!-- Controllers -->
<?php

session_start();
requireValidSession();

$id = $_SESSION['user']->id;

loadTemplateView('cadastrar-produtos.php');