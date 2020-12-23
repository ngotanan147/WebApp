<?php
class Home extends Controller
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

    function index()
    {
        $data = [];
        if (!isset($_SESSION['email'])) {
            $this->getView("TrangChu", [
                "product" => $this->productModel->getProductByCategoryId(1),
            ]);
        } else {
            $user = $this->userModel->getUserByEmail($_SESSION['email']);
            $quantity = $this->cartModel->sumQuantity($user["user_id"]);

            $this->getView("TrangChu", [
                "product" => $this->productModel->getProductByCategoryId(1),
                "quantity" => $quantity[0]["sum(quatity)"],
            ]);
        }
    }
}
