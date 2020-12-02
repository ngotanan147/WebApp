<?php
class AdminProduct extends Controller
{


    function
    default()
    {
        Header("location:http://localhost/Doanweb/AdminProduct");
    }

    function SayHi()
    {
        $model = $this->getModel("ProductModel");

        $this->getViewAdmin("Product", [
            "product" => $model->getProduct()
        ]);
    }
    // Product ------------------------------------------------------------------------------------------------
    function deleteProduct($id)
    {
        $this->default();
        $product = $this->getModel("ProductModel");
        $product->deleteProduct($id);

        $this->getViewAdmin("Product", [
            "product" => $product->getProduct(),
        ]);
    }

    function addProduct()
    {
        $this->default();
        $product = $this->getModel("product");

        if (isset($_POST["addProduct"])) {


            $name = $_POST["name"];
            $price = $_POST["price"];
            $description = $_POST["description"];
            $category_id = $_POST["category_id"];
            $category_name = $_POST["category_name"];
            $image = $_POST["image"];
            // $image = $_FILES["c_img"]["name"];
            // if ($image != null) {
            //     $path = "./mvc/assets/TableFile/img";
            //     $tmp_name = $_FILES["c_img"]["tmp_name"];
            //     $image = $_FILES["c_img"]["name"];

            //     move_uploaded_file($tmp_name, $path . $image);
            // }

            $product->addProduct($name, $image, $price, $description, $category_id, $category_name);
        }
    }
}
