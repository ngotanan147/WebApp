<?php
class Product extends Controller
{
    private $productModel;
    private $userModel;
    private $cartModel;
    function __construct()
    {
        $this->productModel = $this->getModel("ProductModel");
        $this->userModel = $this->getModel("UserModel");
        $this->cartModel = $this->getModel("CartModel");
    }

    function test()
    {
        $data = $this->productModel->getAll();
        foreach ($data as $key => $value) {
            print_r($value);
            echo "</br>";
        }
    }

    function index()
    {
        $data = $this->productModel->getAll();
        if (isset($_SESSION["email"])) {
            $user = $this->userModel->getUserByEmail($_SESSION['email']);
            $quantity = $this->cartModel->sumQuantity($user["user_id"]);
            $this->getView("Product", [
                'product' => $data,
                "quantity" => $quantity[0]["sum(quatity)"]
            ]);
        } else {
            $this->getView("Product", [
                'product' => $data
            ]);
        }
    }

    function getCategory($category_id)
    {
        $data = $this->productModel->getAll();
        $array = [];
        if ($category_id == 0) {
            foreach ($data as $key => $value) {
                array_push($array, $value);
            }
        } else {
            foreach ($data as $key => $value) {
                if ($value["categories_id"] == $category_id) {
                    array_push($array, $value);
                }
            }
        }

        $myJson = json_encode($array, JSON_UNESCAPED_UNICODE);
        echo $myJson;
    }
}
