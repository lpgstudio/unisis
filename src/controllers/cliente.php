<?php

session_start();
requireValidSession();

$id = $_SESSION['user']->id;


loadTemplateView('criar-cliente');