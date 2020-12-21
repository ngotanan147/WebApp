<?php
class Payment extends Controller
{
    private $productModel;
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
            $user = $this->userModel->getUserByEmail($_SESSION['email']);
            $data = $this->cartModel->getCartByUserId($user["user_id"]);

            $quantity = $this->cartModel->sumQuantity($user["user_id"]);
            $this->getView("Payment", [
                "cart" => $data,
            ]);
        } else {
            if (isset($_SESSION['cart'])) {
                $data = $_SESSION['cart'];

                $this->getView("Payment", [
                    "cart" => $data,
                ]);
            } else {
                $this->getView("Payment", []);
            }
        }
    }


    function paymentDone()
    {
        if (!isset($_SESSION['email'])) {
            unset($_SESSION['cart']);
            header("Location:" . URL . "");
        } else {
            $user = $this->userModel->getUserByEmail($_SESSION['email']);
            $this->cartModel->deleteAll($user["user_id"]);
            header("Location:" . URL . "");
        }
    }
}
