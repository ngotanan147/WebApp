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

    function test()
    {
        $data = $this->productModel->getProductByCategoryId(2);
        print_r($data);
    }

    function index()
    {
        $data = [];
        if (!isset($_SESSION['email'])) {
            $this->getView("TrangChu", [
                "product" => $this->productModel->getProductByCategoryId(1),
                "tea" => $this->productModel->getProductByCategoryId(2),
                "kemtuoi" => $this->productModel->getProductByCategoryId(3),
                "caphe" => $this->productModel->getProductByCategoryId(4),
                "nuocep" => $this->productModel->getProductByCategoryId(5),
            ]);
        } else {
            $user = $this->userModel->getUserByEmail($_SESSION['email']);
            $quantity = $this->cartModel->sumQuantity($user["user_id"]);

            $this->getView("TrangChu", [
                "product" => $this->productModel->getProductByCategoryId(1),
                "tea" => $this->productModel->getProductByCategoryId(2),
                "kemtuoi" => $this->productModel->getProductByCategoryId(3),
                "caphe" => $this->productModel->getProductByCategoryId(4),
                "nuocep" => $this->productModel->getProductByCategoryId(5),
                "quantity" => $quantity[0]["sum(quatity)"],
            ]);
        }
    }
}
