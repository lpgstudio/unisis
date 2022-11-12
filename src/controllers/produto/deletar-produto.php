<?php

session_start();
requireValidSession();

$user_id = $_SESSION['user']->id;
$produto = filter_var($_REQUEST['codigo'], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_LOW);

try{
    $delete = Produto::deleteProduct($user_id, $produto);
    header('Location: ../dashboard.php');
}catch(Exception $e){
    addErrorMsg('Error: '. $e->getMessage());
}
