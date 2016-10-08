<?php
include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';

function indexAction($smarty) {
	$price= isset($_GET['price']) ? $_GET['price'] : null;
	if ($price == null){
		$rsProducts = getLastProducts(16);
	}else {
		$rsProducts = getPrice($price);
	}
	for($index = 0; $index < count ($rsProducts); ++$index ) {
		$filename ='/var/www/graf2933/data/www/royalflowers.com.ua/images/products/'.$rsProducts[$index]['Image'];
		if (file_exists($filename)) {
		} else {
			unset ( $rsProducts [$index] );
		}
	}
	$rsCategories =getAllMainCarsWithChildren();
	$smarty->assign('pageTitle',' ');
	$smarty->assign('rsCategories', $rsCategories);
	$smarty->assign('rsProducts', $rsProducts);
	loadTemplate($smarty,'header');
	loadTemplate($smarty,'index');
	loadTemplate($smarty,'footer');
}
function fromAction($smarty) {
	$price= isset($_GET['price']) ? $_GET['price'] : null;
	if ($price == null){
		$rsProducts = getLastProducts(16);
	}else {
		$rsProducts = getfromPrice($price);
	}
	for($index = 0; $index < count ($rsProducts); ++$index ) {
		$filename ='/var/www/graf2933/data/www/royalflowers.com.ua/images/products/'.$rsProducts[$index]['Image'];
		if (file_exists($filename)) {
		} else {
			unset ( $rsProducts [$index] );
		}
	}
	
	$rsCategories =getAllMainCarsWithChildren();
	$smarty->assign('pageTitle',' ');
	$smarty->assign('rsCategories', $rsCategories);
	$smarty->assign('rsProducts', $rsProducts);
	loadTemplate($smarty,'header');
	loadTemplate($smarty,'index');
	loadTemplate($smarty,'footer');
}