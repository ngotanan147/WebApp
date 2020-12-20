<?php
class GioiThieu extends Controller
{

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
            $this->getView("GioiThieu", []);
        } else {
            $user = $this->userModel->getUserByEmail($_SESSION['email']);
            $quantity = $this->cartModel->sumQuantity($user["user_id"]);

            $this->getView("GioiThieu", [
                "quantity" => $quantity[0]["sum(quatity)"],
            ]);
        }
    }
}
