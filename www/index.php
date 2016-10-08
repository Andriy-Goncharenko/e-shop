<?php

session_start();

if(! isset($_SESSION['cart'])){
    $_SESSION['cart']= array();
}

include_once '../config/config.php';
include_once '../config/db.php';
include_once '../library/mainFunctions.php';

//оприделям с каким контролиром будем роботать 
$controllerName =  isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';
//оприделям с каким функциий бедум роботать будем роботать
$actoinName =  isset($_GET['action'])? $_GET['action'] : 'index';
$smarty->assign('cartCntItems',  count($_SESSION['cart']));
loadPage($smarty,$controllerName,$actoinName);

