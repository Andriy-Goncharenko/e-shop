<?php

function  loadPage($smarty ,$controllerName ,$actoinName ='index'){
// подключакем контроллез
include_once PathPrefix.$controllerName.PathPostfix;
//Формуем название функции
$function = $actoinName.'Action';

$function($smarty);    
   
}
function loadTemplate($smarty, $templateName){
    $smarty->display($templateName . TemplatePostfix);
}

function  d($value = null,$die=1){
    echo 'Debud:<br/><pre>';
    print_r($value);
     echo '</pre>';
    if($die) die;
}
function createSmartyRsArray($rs){
    if(! $rs) return false;
    $smartyRs =array();
    while ($row = mysql_fetch_assoc($rs)){
        $smartyRs[] =$row;
    }
    return $smartyRs;
    }