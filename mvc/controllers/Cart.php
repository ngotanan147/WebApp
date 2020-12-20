<?php
class Cart extends Controller
{
    private $productModel;
    private $cartModel;
    private $userModel;
    private $total_quantity;
    function __construct()
    {
        $this->productModel = $this->getModel("ProductModel");
        $this->cartModel = $this->getModel("CartModel");
        $this->userModel = $this->getModel("UserModel");
    }

    function SayHi()
    {
        $data = [];
        if (isset($_SESSION['cart'])) {
            $data = $_SESSION['cart'];
        }



        $this->getView("Cart", [
            "cart" => $data,
        ]);
    }

    function test()
    {
        $user = $this->userModel->getUserByEmail($_SESSION['email']);
        print_r($user["user_id"]);
    }

    function store($id)
    {
        $product = $this->productModel->getProductById($id);


        if (isset($_SESSION['email'])) {
            $user = $this->userModel->getUserByEmail($_SESSION['email']);
        } else {
            if (empty($_SESSION['cart']) || !array_key_exists($id, $_SESSION['cart'])) {
                $product['quantity'] = 1;
                $_SESSION['cart'][$id] = $product;
            } else {
                $product['quantity'] = $_SESSION['cart'][$id]['quantity'] + 1;
                $_SESSION['cart'][$id] = $product;
            }
            $data = $_SESSION['cart'];

            $total = 0;
            foreach ($_SESSION['cart'] as $key => $value) {
                $total += $value['quantity'];
            }

            echo "Success/" . strval($total);
        }
    }

    function update()
    {
        foreach ($_POST['quantity'] as $key => $value) {
            if ($value < 0 || !is_numeric($value)) {
                continue;
            }
            if ($value == 0) {
                unset($_SESSION['cart'][$key]);
            } else {
                $_SESSION['cart'][$key]['quantity'] = $value;
            }
        }
        Header('Location: ' . URL . 'cart');
    }

    function delete($id)
    {
        if (count($_SESSION['cart']) == 1) {
            unset($_SESSION['cart']);
        } else {
            unset($_SESSION['cart'][$id]);
        }

        if (isset($_SESSION['cart'])) {
            $data = $_SESSION['cart'];

            $total = 0;
            if (isset($_SESSION['cart'])) {
                foreach ($_SESSION['cart'] as $key => $value) {
                    $total += $value['quantity'];
                }
            }
            echo $id . '/' . $total;
        }
    }
}
