<?php

include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';

function addtocartAction() {
    $itemId = isset($_GET['id']) ? intval($_GET['id']) : null;
    if (!$itemId)
        return false;
    $resData = array();
    if (isset($_SESSION['cart']) && array_search($itemId, $_SESSION['cart']) === false) {
        $_SESSION['cart'][] = $itemId;
        $resData['cntItems'] = count($_SESSION['cart']);
        $resData['success'] = 1;
    } else {
        $resData['success'] = 0;
    }
    echo json_encode($resData);
}

function removefromcartAction() {
    $itemId = isset($_GET['id']) ? intval($_GET['id']) : null;
    if (!$itemId)
        exit();
    $resData = array();
    $key = array_search($itemId, $_SESSION['cart']);
    if ($key !== FALSE) {
        unset($_SESSION['cart'][$key]);
        $resData['success'] = 1;
        $resData['cntItems'] = count($_SESSION['cart']);
    } else {
        $resData['success'] = 0;
    }
}

function indexAction($smarty) {
    $itemId = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
    $rsCategories = getAllMainCarsWithChildren();
    $rsProducts = getProductsFromArray($itemId);
    $smarty->assign('pageTitle', 'Корзина');
    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsProducts', $rsProducts);

    loadTemplate($smarty, 'cartheader');
    loadTemplate($smarty, 'cart');
    loadTemplate($smarty, 'footer');
}
