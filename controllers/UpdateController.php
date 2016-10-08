<?php

include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';

function indexAction($smarty) {
    if ($_SESSION['name'] == "andriy" && $_SESSION['password'] == "2222") {
        $itemId = isset($_GET['id']) ? $_GET['id'] : null;
        if ($itemId == null)
            exit();
        $_SESSION['itemsid'] = $itemId;
        $rsProduct = getProductsById($itemId);
        $rsCategories = getAllMainCarsWithChildren();

        $smarty->assign('rsCategories', $rsCategories);
        $smarty->assign('rsProduct', $rsProduct);

        loadTemplate($smarty, 'ordertableheader');
        loadTemplate($smarty, 'loadhead');
        loadTemplate($smarty, 'update');
    }
}

function updateAction($smarty) {
    if ($_SESSION['name'] == "andriy" && $_SESSION['password'] == "2222") {

        if (isset($_POST['submit'])) {
            setUpdate($_POST['name'], $_POST['price'], $_POST['description'], $_SESSION['itemsid']);
        }
    }
}
