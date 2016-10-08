<?php

include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';

function indexAction($smarty) {
    $rsCategories = getAllMainCarsWithChildren();
    $smarty->assign('pageTitle', 'Быстрый заказ');
    $smarty->assign('rsCategories', $rsCategories);
    loadTemplate($smarty, 'cartheader');
    loadTemplate($smarty, 'quickorder');
    loadTemplate($smarty, 'footer');
}

function setAction($smarty) {
    error_reporting(E_ERROR);
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $description = $_POST['message'];
        $number = $_POST['subject'];
        setUserToShop($name, $email, $number, $description,"0");
        
    }
    if (!$name && !$email && !$number && !$description) {
        $rsCategories = getAllMainCarsWithChildren();
        $smarty->assign('pageTitle', 'Оформление заказа');
        $smarty->assign('rsCategories', $rsCategories);
        loadTemplate($smarty, 'cartheader');
        loadTemplate($smarty, 'quickorder');
        loadTemplate($smarty, 'footer');
        return;
    }
    
    $rsCategories = getAllMainCarsWithChildren();
    $smarty->assign('pageTitle', 'Оформление заказа');
    $smarty->assign('rsCategories', $rsCategories);
    loadTemplate($smarty, 'cartheader');
    loadTemplate($smarty, 'good');
    loadTemplate($smarty, 'footer');
}
