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

    function index()
    {
        $data = [];
        if (!isset($_SESSION['email'])) {
            if (isset($_SESSION['cart'])) {
                $data = $_SESSION['cart'];

                $this->getView("Cart", [
                    "cart" => $data,
                ]);
            } else {
                $this->getView("Cart", []);
            }
        } else {
            $user = $this->userModel->getUserByEmail($_SESSION['email']);
            $data = $this->cartModel->getCartByUserId($user["user_id"]);

            $quantity = $this->cartModel->sumQuantity($user["user_id"]);

            $this->getView("Cart", [
                "cart" => $data,
                "quantity" => $quantity[0]["sum(quatity)"]
            ]);
        }
    }

    function test()
    {
        $user = $this->userModel->getUserByEmail($_SESSION['email']);
        $cart = $this->cartModel->getCartByUserId($user["user_id"]);

        foreach ($cart as $key => $value) {
            print_r($value);
            echo "</br>";
        }
    }

    function store($id)
    {
        $product = $this->productModel->getProductById($id);

        if (isset($_SESSION['email'])) {
            $user = $this->userModel->getUserByEmail($_SESSION['email']);
            $data = $this->cartModel->checkIfDuplicate($user["user_id"], $product["product_id"]);

            //Check if exist in cart
            if (empty($data)) {
                $data = [
                    "user_id" => $user["user_id"],
                    "user_name" => $user["user_name"],
                    "product_name" => $product["product_name"],
                    "product_id" => $product["product_id"],
                    "product_image" => $product["product_image"],
                    "product_price" => $product["product_price"],
                    "quatity" => 1,
                    "total" => $product["product_price"],
                ];

                $data = $this->cartModel->sumQuantity(10);

                $this->cartModel->addToCart($data);

                echo "Success/" . strval(1);
            } else {
                $new_quantity = $data[0]["quatity"] + 1;
                $this->cartModel->updateQuantity($user["user_id"], $product["product_id"], $new_quantity);

                $data = $this->cartModel->sumQuantity($user["user_id"]);

                echo "Success/" . $data[0]["sum(quatity)"];
                // die();
            }
        } else { // Xử lí cart session
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
