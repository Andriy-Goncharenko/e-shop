<?php


include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';

function indexAction($smarty){
    $rsProducts = NULL;
     if(isset($_POST['submit'])){
         $rsCategories =getAllMainCarsWithChildren();
         $rsProducts =  getSearch($_POST['query']);
         for($index = 0; $index < count ($rsProducts); ++$index ) {
		$filename ='/var/www/graf2933/data/www/royalflowers.com.ua/images/products/'.$rsProducts[$index]['Image'];
		if (file_exists($filename)) {
		} else {
			unset ( $rsProducts [$index] );
		}
		 }
		 $smarty->assign('pageTitle','Главная страница');
    $smarty->assign('name', $_POST['query']);
    $smarty->assign('rsCategories', $rsCategories);
   $smarty->assign('rsProducts', $rsProducts);
    loadTemplate($smarty,'header');
    loadTemplate($smarty,'search');
    loadTemplate($smarty,'footer');
     return;
     }
    
    $rsCategories =getAllMainCarsWithChildren();
    $smarty->assign('pageTitle','Главная страница');
    $smarty->assign('name', NULL);
    $smarty->assign('rsCategories', $rsCategories);
   $smarty->assign('rsProducts', $rsProducts);
    loadTemplate($smarty,'header');
    loadTemplate($smarty,'search');
    loadTemplate($smarty,'footer');
}