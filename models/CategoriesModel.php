<?php

/**
 *Модель для таблицы категорий
 */

function getChildrenForCat($cadId){
     $sql ="SELECT * FROM categorles WHERE parent_id = '{$cadId}'";

     $rs=  mysql_query($sql);
     
     return createSmartyRsArray($rs); 
     }
     
function getChildrenForCat2($s){
     $sql ="SELECT * FROM products WHERE `category_id` IN ({$s})";
     $rs=  mysql_query($sql);
     
     return createSmartyRsArray($rs); 
     }     

function getAllMainCarsWithChildren(){
    $sql ='SELECT * FROM categorles WHERE parent_id =0';
    
    $rs=  mysql_query($sql);
    
    $smartyRs=array();
    while ($row = mysql_fetch_assoc($rs)) {
         $rsChildren = getChildrenForCat($row['id']);
         if ($rsChildren) {
             $row['children'] = $rsChildren;
         }
        
        $smartyRs[]=$row;      
    }
    return $smartyRs;
    }
    function getCatById($catID){
        $catID =  intval($catID);
        $sql ="SELECT * FROM categorles WHERE id = '{$catID}'";
        
        $rs=  mysql_query($sql);
        return mysql_fetch_assoc($rs);
        
    }
