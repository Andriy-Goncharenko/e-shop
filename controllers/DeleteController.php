<?php

include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';

function indexAction() {
    error_reporting(E_ALL ^ E_NOTICE);
    $delete = isset($_GET['delete']) ? $_GET['delete'] : null;
    if ($delete == null){
        exit;
    }
    setDelete($delete);
    header('location:../?controller=admin&action=stol');
}
