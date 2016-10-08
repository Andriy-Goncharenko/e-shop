<?php

include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';

class Index {
	
	private $Categories;
	private $Products;

	public function getCategories()
    {
        return $this->Categories;
    }
     
    public function setCategories($Categories)
    {
        $this->Categories = $Categories;
    	
    }
    public function getProducts()
    {
        return $this->Products;
    }
     
    public function setProducts($Products)
    {
        $this->Products = $Products;
    	
    }
    
    public function LoadingPage($smarty){
    	
        $this->setCategories(getAllMainCarsWithChildren ());
	    $this->setProducts(getIndex());
        
        $smarty->assign ( 'rsCategories',  $this->getCategories());
        $smarty->assign ( 'rsProducts',  $this->getProducts());
        
        loadTemplate ( $smarty, 'header' );
        loadTemplate ( $smarty, 'index' );
        loadTemplate ( $smarty, 'footer' );
    }
}

function indexAction($smarty) {
	
	$Start = new Index();
	$Start->LoadingPage($smarty);
}
