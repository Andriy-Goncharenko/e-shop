
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
    
    public function LoadingPage($smarty,$itemId){
        $this->setCategories(getAllMainCarsWithChildren ());
        $this->setProducts(getProductsById($itemId));
    

    $smarty->assign('itemInCart',0);
    if(in_array($itemId, $_SESSION['cart'])){
       $smarty->assign('itemInCart',1);  
    }
    $smarty->assign('pageTitle','');
    $smarty->assign('rsCategories',$rsCategories);
    $smarty->assign('rsProduct', $rsProduct);

    loadTemplate($smarty,'product_header');
    loadTemplate($smarty,'product');
    loadTemplate($smarty,'footer');   


    }
}


function indexAction($smarty){
 error_reporting(E_ALL ^ E_NOTICE);
    $itemId = isset($_GET['id'])? $_GET['id'] :null;
    if($itemId == null) exit();

    $Start = new Index();
    $Start->LoadingPage($smarty,$itemId);

    

}    