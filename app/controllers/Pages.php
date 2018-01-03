<?php
class Pages extends Controller{
    function __construct(){
        
        $this->productsModel = $this->model('Products');
       
    }
    function index(){
        $product = $this->productsModel->getProduct();

        $data = [
            'products'=>$product
        ];
        return $this->view('pages/index',$data);
    }
    function about($id){
        echo $id; 
    }
}

?>