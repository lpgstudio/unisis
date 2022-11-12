<?php

session_start();
requireValidSession();

$user_id = $_SESSION['user']->id;
$cliente = filter_var($_REQUEST['codigo'], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_LOW);

try{
    $delete = Cliente::deleteClient($user_id, $cliente);
    header('Location: ../dashboard.php');
}catch(Exception $e){
    addErrorMsg('Error: '. $e->getMessage());
}
