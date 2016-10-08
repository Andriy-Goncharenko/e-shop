<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function getLastProducts($limit = null) {
    $sql = "SELECT * FROM `products` ORDER BY id DESC";
    if ($limit) {
        $sql .=" LIMIT {$limit}";
    }
    $rs = mysql_query($sql);
    return createSmartyRsArray($rs);
}
function getPrice($price) {
	$sql = "SELECT * FROM  `products` WHERE  `price` <{$price}";
	$rs = mysql_query($sql);
	return createSmartyRsArray($rs);
}
function getIndex(){
	$sql = "SELECT * FROM products WHERE  `id` IN (46, 188,143,294,257,206,74,245,588,230,459)";
	$rs = mysql_query($sql);
	return createSmartyRsArray($rs);
}
function getfromPrice($price) {
	$sql = "SELECT * FROM  `products` WHERE  `price` >{$price}";
	$rs = mysql_query($sql);
	return createSmartyRsArray($rs);
}

function getProductsByCat($itemId) {
    $itemId = intval($itemId);
    $sql = "SELECT * FROM `products` WHERE category_id ='{$itemId}'";
    $rs = mysql_query($sql);
    return createSmartyRsArray($rs);
}

function getProductsById($itemId) {
    $itemId = intval($itemId);
    $sql = "SELECT * FROM `products` WHERE id ='{$itemId}'";
    $rs = mysql_query($sql);
    return mysql_fetch_assoc($rs);
}
function getProductsByorder($itemId) {
	$itemId = intval($itemId);
	$sql = "SELECT * FROM `order` WHERE id ='{$itemId}'";
	$rs = mysql_query($sql);
	return mysql_fetch_assoc($rs);
}

function getProductsFromArray($itemsIds) {
    $strIds = implode($itemsIds, ', ');
    $sql = "SELECT * FROM `products` WHERE id in ({$strIds})";

    $rs = mysql_query($sql);
    return createSmartyRsArray($rs);
}

function setUserToShop($name,$telephone, $email, $message, $name1,$telephone1, $email1, $message1,$priority,$priority1,$product,$Delivery_time,$delivery_date,$price) {
    $date = date("Y-m-d");
    $sql = "INSERT INTO `graf2933_test`.`order` 
    				(`id`, `data`, `name`, `telephone`, `email`, `message`, `name1`, `telephone1`, `email1`, `message1`, `priority`, `priority1`, `product`, `Delivery_time`, `delivery_date`,`price`) 
    		VALUES (NULL,'{$date}', '{$name}', '{$telephone}', '{$email}', '{$message}', '{$name1}', '{$telephone1}', '{$email1}', '{$message1}', '{$priority}', '{$priority1}', '{$product}','{$Delivery_time}','{$delivery_date}','{$price}');";
    mysql_query($sql);
}

function getUserToShop() {
    $sql = "SELECT * FROM `order`";
    $rs = mysql_query($sql);
    return createSmartyRsArray($rs);
}

function getStolToShop() {
    $sql = "SELECT * FROM `products`";
    $rs = mysql_query($sql);
    return createSmartyRsArray($rs);
}

function setStolToShop($category_id, $name, $description, $price, $Image) {
    $sql = "INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `price`, `Image`, `status`) "
            . "VALUES (NULL, '{$category_id}', '{$name}', '{$description}', '{$price}', '{$Image}', '1');";
    mysql_query($sql);
}
function delete($Id) {
	$sql = "DELETE FROM `graf2933_test`.`order` WHERE `order`.`id` = {$Id};";
	mysql_query($sql);
}

function getSearch($name) {
    $sql = "SELECT * FROM `products` WHERE `name` LIKE '%{$name}%'";
    $rs = mysql_query($sql);
    return createSmartyRsArray($rs);
}
function setDelete($delete){
    $sql ="DELETE FROM `products` WHERE `products`.`id` = {$delete}";
    mysql_query($sql);
}
function setUpdate($name, $price,$description,$id){
     $sql =" UPDATE `products` SET `name` = '{$name}', `price` = '{$price}', `description` = '{$description}' WHERE `products`.`id` = {$id};";
    
     
     mysql_query($sql);
}