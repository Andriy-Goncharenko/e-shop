<?php
include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';
function indexAction($smarty) {
	$itemId = isset ( $_SESSION ['cart'] ) ? $_SESSION ['cart'] : array ();
	$rsCategories = getAllMainCarsWithChildren ();
	$rsProducts = getProductsFromArray ( $itemId );
	for ($i = 0; $i < count($rsProducts); $i++){
		$price+=$rsProducts[$i]['price'];
		
	}
	$smarty->assign ( 'rsProducts', $rsProducts );
	$smarty->assign ( 'pageTitle', 'Оформление заказа' );
	$smarty->assign ( 'rsCategories', $rsCategories );
	$smarty->assign ( 'price', $price );
	
	loadTemplate ( $smarty, 'cartheader' );
	loadTemplate ( $smarty, 'checkout' );
	loadTemplate ( $smarty, 'footer' );
}
function postAction($smarty) {
	error_reporting ( E_ERROR );
	$itemId = isset ( $_SESSION ['cart'] ) ? $_SESSION ['cart'] : array ();
	if (isset ( $_POST ['submit'] )) {
		 d($_POST);
	}
	for($index = 0; $index < count ( $itemId ); $index ++) {
		$dps .= $itemId [$index] . " ";
	}
	setUserToShop ( $name, $email, $number, $dps, $category );
	$_SESSION ['cart'] = NULL;
	$rsCategories = getAllMainCarsWithChildren ();
	$smarty->assign ( 'pageTitle', 'Оформление заказа' );
	$smarty->assign ( 'rsCategories', $rsCategories );
	loadTemplate ( $smarty, 'cartheader' );
	loadTemplate ( $smarty, 'good' );
	loadTemplate ( $smarty, 'footer' );
}