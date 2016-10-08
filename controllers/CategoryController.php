<?php
include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';
function indexAction($smarty) {
	$str = null;
	error_reporting ( E_ALL ^ E_NOTICE );
	$catID = isset ( $_GET ['id'] ) ? $_GET ['id'] : null;
	if ($catID == null) {
		exit ();
	}
	
	$rsGlaw = getChildrenForCat ( $catID );
	for($index = 0; $index < count ( $rsGlaw ); $index ++) {
		
		$str .= $rsGlaw [$index] ['id'] . ",";
	}
	if ($str {strlen ( $str ) - 1} == ',') {
		$str = substr ( $str, 0, - 1 );
	}
	
	$rsChildCats = null;
	$rsProducts = null;
	$rsCategory = getCatById ( $catID );
	if ($rsCategory ['parent_id'] == 0) {
		$rsChildCats = getChildrenForCat2 ( $str );
	} else {
		$rsProducts = getProductsByCat ( $catID );
	}
	for($index = 0; $index < count($rsProducts); ++ $index) {
		$filename = '/var/www/graf2933/data/www/royalflowers.com.ua/images/products/'.$rsProducts[$index]['Image'];
		if (file_exists ($filename)) {
		} else {
			unset ($rsProducts[$index]);
		}
	}
	for($index = 0; $index < count($rsChildCats); ++ $index) {
		$filename = '/var/www/graf2933/data/www/royalflowers.com.ua/images/products/'.$rsChildCats[$index]['Image'];
		if (file_exists ($filename)) {
		} else {
			unset ($rsChildCats[$index]);
		}
	}
	$rsCategories = getAllMainCarsWithChildren ();
	
	$smarty->assign ( 'pageTitle', 'Товар ' . $rsCategory ['name'] );
	$smarty->assign ( 'rsCategories', $rsCategory );
	$smarty->assign ( 'rsProducts', $rsProducts );
	$smarty->assign ( 'rsChildCats', $rsChildCats );
	$smarty->assign ( 'rsCategories', $rsCategories );
	
	loadTemplate ( $smarty, 'header' );
	loadTemplate ( $smarty, 'category' );
	loadTemplate ( $smarty, 'footer' );
}
