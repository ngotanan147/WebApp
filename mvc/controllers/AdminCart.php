<?php
class AdminCart extends Controller
{
    private $model;

    function __construct()
    {
        $this->model = $this->getModel("CartModel");
    }

    function defaultCart()
    {
        Header("location:" . URL . "Admin/cart");
    }

    function SayHi()
    {
        $this->getViewAdmin("Cart/Cart", [
            "cart" => $this->model->getCart()
        ]);
    }

    function delete($id)
    {
        $this->defaultCart();
        $this->model->deleteCart($id);
    }

    function addCart()
    {
        $this->defaultCart();

        if (isset($_POST["addCart"])) {
            $role = 1;
            if ($_POST["role"] == "Admin") {
                $role = 0;
            } else {
                $role = 1;
            }

            $data = [
                'Cart_name' => $_POST["name"],
                'Cart_email' => $_POST["email"],
                'Cart_password' => $_POST["password"],
                'Cart_role' => $role
            ];
            $this->model->addCart($data);
        }
    }

    function showEditData($id)
    {
        $data = $this->model->getCartById($id);

        $this->getViewAdmin("CartEdit", [
            "id" => $data["Cart_id"],
            "name" => $data["Cart_name"],
            "email" => $data["Cart_email"],
            "password" => $data["Cart_password"],
            "role" => $data["Cart_role"],
            "Cart" => $this->model->getCart(),
        ]);
    }

    function editCart($id)
    {
        $this->defaultCart();
        if (isset($_POST["editCart"])) {
            $role = 1;
            if ($_POST["role"] == "Admin") {
                $role = 0;
            } else {
                $role = 1;
            }

            $data =  [
                "Cart_name" => $_POST["name"],
                "Cart_email" => $_POST["email"],
                "Cart_password" => $_POST["password"],
                "Cart_role" => $role,
            ];

            $this->model->editCart($id, $data);
        }
    }
}
