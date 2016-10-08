<?php

include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';

$img=NULL;

function loadAction($smarty) {




    error_reporting(E_ERROR);
    if (isset($_POST['submit'])) {
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['password'] = $_POST['password'];
        if ($_SESSION['name'] == "andriy" && $_SESSION['password'] == "2222") {
             adminAction($smarty);
        } else {
            $smarty->assign('pageTitle', '');
            loadTemplate($smarty, 'ordertableheader');
            loadTemplate($smarty, 'loading');
        }
    } else {
        $smarty->assign('pageTitle', '');
        loadTemplate($smarty, 'ordertableheader');
        loadTemplate($smarty, 'loading');
    }
}

function adminAction($smarty) {
    if ($_SESSION['name'] == "andriy" && $_SESSION['password'] == "2222") {
        $Pocep = getUserToShop();
        
        
        $smarty->assign('pageTitle', 'Стол заказов');
        $smarty->assign('rsProducts', $Pocep);

        loadTemplate($smarty, 'ordertableheader');
        loadTemplate($smarty, 'loadhead');
        loadTemplate($smarty, 'ordertable');
    }
}
function orderAction($smarty) {
	if ($_SESSION['name'] == "andriy" && $_SESSION['password'] == "2222") {
		error_reporting(E_ALL ^ E_NOTICE);
    $itemId = isset($_GET['id'])? $_GET['id'] :null;

    $rsProduct = getProductsByorder($itemId);
    $rsProducts =getProductsById($rsProduct['product']);
    $smarty->assign('rsProducts', $rsProducts);
    $smarty->assign('rsProduct', $rsProduct);
    
    loadTemplate($smarty, 'ordertableheader');
    loadTemplate($smarty, 'loadhead');
    loadTemplate($smarty, 'other');
	}
}
function orderdeleteAction(){
	$itemId = isset($_GET['id'])? $_GET['id'] :null;
	delete($itemId);
	d("Заказ номер : {$itemId} Удален");
}

function addAction($smarty) {

    if ($_SESSION['name'] == "andriy" && $_SESSION['password'] == "2222") {
        if (isset($_POST['submit'])) {
            $uploaddir = '/var/www/graf2933/data/www/royalflowers.com.ua/images/products/';
            $uploadfile = $uploaddir . basename($_FILES['namefile']['name']);
            move_uploaded_file($_FILES['namefile']['tmp_name'], $uploadfile);	
            error_reporting(E_ALL ^ E_NOTICE);
            $smarty->assign('image',$_FILES['namefile']['name']);
            $_SESSION['img'] =$_FILES['namefile']['name'];
        }
        if (isset($_POST['submit2'])) {
        	setStolToShop($_POST['category'], $_POST['name'], $_POST['message'], $_POST['price'],$_SESSION['img']);
        }
        
        error_reporting(E_ALL ^ E_NOTICE);
        $rsCategories = getAllMainCarsWithChildren();
        $smarty->assign('pageTitle', 'Добавить букет');
        $smarty->assign('rsCategories', $rsCategories);

        loadTemplate($smarty, 'ordertableheader');
        loadTemplate($smarty, 'loadhead');
        loadTemplate($smarty, 'add');
    }
}


function stolAction($smarty) {
    if ($_SESSION['name'] == "andriy" && $_SESSION['password'] == "2222") {
        error_reporting(E_ALL ^ E_NOTICE);
        $Pocep = getStolToShop();

        $smarty->assign('pageTitle', 'Товар');
        $smarty->assign('rsProducts', $Pocep);

        loadTemplate($smarty, 'ordertableheader');
        loadTemplate($smarty, 'loadhead');
        loadTemplate($smarty, 'stol2');
    }
}
