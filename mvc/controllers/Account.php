<?php
class Account extends Controller
{
    private $cartModel;
    private $userModel;
    function __construct()
    {
        $this->productModel = $this->getModel("ProductModel");
        $this->cartModel = $this->getModel("CartModel");
        $this->userModel = $this->getModel("UserModel");
    }

    function test()
    {
        $data = $this->userModel->getUserByEmail($_SESSION['email']);
        print_r($data["user_name"]);
    }

    function index()
    {
        $data = [];
        if (isset($_SESSION['email'])) {
            $data = $this->userModel->getUserByEmail($_SESSION['email']);
            $quantity = $this->cartModel->sumQuantity($data["user_id"]);
            $this->getView("Account", [
                'user' => $data,
                "quantity" => $quantity[0]["sum(quatity)"]
            ]);
        }
        $this->getView("Account", []);
    }
}
