<?php

include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';

function indexAction($smarty){
    
    $rsCategories =getAllMainCarsWithChildren();
    $rsProducts = getLastProducts(16);
    $smarty->assign('pageTitle','Главная страница');
    $smarty->assign('rsCategories', $rsCategories);
    loadTemplate($smarty,'header');
    loadTemplate($smarty,'contact');
    loadTemplate($smarty,'footer');
}
