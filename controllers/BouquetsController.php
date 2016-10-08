<?php

include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';

function indexAction($smarty) {
    $rsCategories = getAllMainCarsWithChildren();
    $rsProducts =  getProductsByCat(99);
    for($index = 0; $index < count($rsProducts); ++$index ) {
    	$filename ='/var/www/graf2933/data/www/royalflowers.com.ua/images/products/'.$rsProducts[$index]['Image'];
    	if (file_exists($filename)) {
    	} else {
    		unset ($rsProducts[$index]);
    	}
    }
    $smarty->assign('pageTitle', 'Букеты');
    $smarty->assign('rsProducts', $rsProducts);
    $smarty->assign('rsCategories', $rsCategories);

    loadTemplate($smarty,'header');
    loadTemplate($smarty,'index');
    loadTemplate($smarty,'footer');
}