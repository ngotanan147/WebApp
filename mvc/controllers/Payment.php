<?php
class Payment extends Controller
{
    private $productModel;
    private $cartModel;
    private $userModel;
    private $billModel;
    function __construct()
    {
        $this->productModel = $this->getModel("ProductModel");
        $this->cartModel = $this->getModel("CartModel");
        $this->userModel = $this->getModel("UserModel");
        $this->billModel = $this->getModel("BillModel");
    }

    function test()
    {
        $user = $this->userModel->getUserByEmail($_SESSION['email']);
        $cart_data = $this->cartModel->getCartByUserId($user[0]);

        $total = 0;
        foreach ($cart_data as $key => $value) {
            $total += $value["product_price"] * $value["quatity"];
        }
        echo $total;
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

    function paymentDone($address)
    {
        if (!isset($_SESSION['email'])) {
            unset($_SESSION['cart']);
            header("Location:" . URL . "");
        } else {
            $user = $this->userModel->getUserByEmail($_SESSION['email']);
            $cart_data = $this->cartModel->getCartByUserId($user[0]);

            $total = 0;
            foreach ($cart_data as $key => $value) {
                $total += $value["product_price"] * $value["quatity"];
            }

            $data = [
                'user_id' => $cart_data[0]["user_id"],
                'total' => $total,
                'address' => $address,
                'date' => date("Y-m-d H:i:s"),
            ];

            $this->billModel->createBill($data);

            $this->cartModel->deleteAll($user["user_id"]);
            header("Location:" . URL . "");
        }
    }
}
