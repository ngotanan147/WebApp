<?php
class Cart extends Controller
{
    private $productModel;
    private $cartModel;
    function __construct()
    {
        $this->productModel = $this->getModel("ProductModel");
        $this->cartModel = $this->getModel("CartModel");
    }

    function SayHi()
    {
        $data = [];
        if (isset($_SESSION['cart'])) {
            $data = $_SESSION['cart'];
        }

        $this->getView("Cart", [
            "cart" => $data
        ]);
    }

    function store($id)
    {
        $product = $this->productModel->getProductById($id);

        if (empty($_SESSION['cart']) || !array_key_exists($id, $_SESSION['cart'])) {
            $product['quantity'] = 1;
            $_SESSION['cart'][$id] = $product;
        } else {
            $product['quantity'] = $_SESSION['cart'][$id]['quantity'] + 1;
            $_SESSION['cart'][$id] = $product;
        }
        $data = $_SESSION['cart'];
        Header('Location: ' . URL . 'cart');
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
        unset($_SESSION['cart'][$id]);
        $data = $_SESSION['cart'];
        Header('Location: ' . URL . 'cart');
    }
}
