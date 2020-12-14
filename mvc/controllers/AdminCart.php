<?php
class AdminCart extends Controller
{
    private $model;

    function __construct()
    {
        $this->model = $this->getModel("UserModel");
    }

    function defaultUser()
    {
        Header("location:" . URL . "Admin");
    }

    function SayHi()
    {
        if (isset($_SESSION["adminEmail"])) {
            $this->getViewAdmin("User/User", [
                "user" => $this->model->getUser()
            ]);
        } else {
            $this->getViewAdmin("Login");
        }
    }

    function deleteUser($id)
    {
        $this->defaultUser();
        $this->model->deleteUser($id);
    }

    function addUser()
    {
        $this->defaultUser();

        if (isset($_POST["addUser"])) {
            $role = 1;
            if ($_POST["role"] == "Admin") {
                $role = 0;
            } else {
                $role = 1;
            }

            $data = [
                'user_name' => $_POST["name"],
                'user_email' => $_POST["email"],
                'user_password' => $_POST["password"],
                'user_role' => $role
            ];
            $this->model->addUser($data);
        }
    }

    function showEditData($id)
    {
        $data = $this->model->getUserById($id);

        $this->getViewAdmin("UserEdit", [
            "id" => $data["user_id"],
            "name" => $data["user_name"],
            "email" => $data["user_email"],
            "password" => $data["user_password"],
            "role" => $data["user_role"],
            "user" => $this->model->getUser(),
        ]);
    }

    function editUser($id)
    {
        $this->defaultUser();
        if (isset($_POST["editUser"])) {
            $role = 1;
            if ($_POST["role"] == "Admin") {
                $role = 0;
            } else {
                $role = 1;
            }

            $data =  [
                "user_name" => $_POST["name"],
                "user_email" => $_POST["email"],
                "user_password" => $_POST["password"],
                "user_role" => $role,
            ];

            $this->model->editUser($id, $data);
        }
    }
}
