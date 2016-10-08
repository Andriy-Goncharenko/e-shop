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
	$rsProducts = getProductsFromArray ( $itemId );
	for ($i = 0; $i < count($rsProducts); $i++){
		$price+=$rsProducts[$i]['price'];
	}
	if (isset ( $_POST ['submit'] )) {
		$price=$price+priceAction($_POST ['priority']);
		for($index = 0; $index < count ( $itemId ); $index ++) {
			$dps .= $itemId [$index] . " ";
		}
		if(!$_POST ['name']&& !$_POST ['telephone']&& !$_POST ['priority']&& !$_POST ['priority1']){
			return indexAction($smarty);
		}else {
		setUserToShop ( $_POST ['name'], $_POST ['telephone'], $_POST ['email'],$_POST ['message'], $_POST ['name1'], $_POST ['telephone1']
				,$_POST ['email1'],$_POST ['message1'],$_POST ['priority'],$_POST ['priority1'],$dps,$_POST ['Delivery_time'],$_POST ['delivery_date'],$price );
		}
		}
	$_SESSION ['cart'] = NULL;
	$rsCategories = getAllMainCarsWithChildren ();
	$smarty->assign ( 'pageTitle', 'Оформление заказа' );
	$smarty->assign ( 'rsCategories', $rsCategories );
	loadTemplate ( $smarty, 'cartheader' );
	loadTemplate ( $smarty, 'good' );
	loadTemplate ( $smarty, 'footer' );
}

function priceAction($i){
	if ($i == "с 9 до 21-00 (диапазон времени 3-4 часа)") {
		return 0;
	} elseif ($i == "в точно указанное время") {
		return 50;
	} elseif ($i == "срочная доставка ( по Киеву в пределах 2-х часов)") {
		return 150;
	} elseif ($i == "с 7-00 до 8-30 и с 21-00 до 23-00") {
		return 100;	
	} elseif ($i == "с 23-00 до 7-00") {
		return 180;
	} elseif ($i == "доставка в пригород") {
		return 200;
	}
}