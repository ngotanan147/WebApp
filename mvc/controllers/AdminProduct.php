<?php
class AdminProduct extends Controller {

    
    function default(){
        Header("location:http://localhost:8080/Doanweb/AdminProduct");
    }

    function SayHi(){
        $model = $this->getModel("ProductModel");

        $this->getViewAdmin("Product", [
            "product" => $model->getProduct()
        ]);
    }
    // Product ------------------------------------------------------------------------------------------------
    function deleteProduct($id){
        $this->default();
        $product = $this->getModel("ProductModel");
        $product->deleteProduct($id);   

        $this->getViewAdmin("Product", [
            "product" => $product->getProduct(),
        ]);
    }

    function addProduct(){
        $this->default();
        $product = $this->getModel("product");

        if (isset($_POST["addProduct"])){
            $name = $_POST["name"];
            $image = $_POST["image"];
            $price = $_POST["price"];
            $description = $_POST["description"];
            $category_id = $_POST["category_id"];
            $category_name = $_POST["category_name"];
            $product->addProduct($name, $image, $price, $description, $category_id, $category_name);
        }   
    }

}
?>