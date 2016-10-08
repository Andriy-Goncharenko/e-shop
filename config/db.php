<?php

/**
 * Иницализация подключенияк базе даных
 */
$dblocatio ="127.0.0.1";
$dbname ="test";
$dbuser ="root";
$dbpasswd="";
error_reporting(~E_DEPRECATED);
$db= mysql_connect($dblocatio,$dbuser,$dbpasswd);
if(! $db){
    echo 'Ошыбка доступа к MySql';
    exit();
}
mysql_set_charset('utf8');
if (!mysql_select_db($dbname,$db)){
    echo 'Error conect DB';
    exit();
}