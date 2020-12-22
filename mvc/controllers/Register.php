<?php
class Register extends Controller
{
    private $fail = false;
    private $model;
    function __construct()
    {
        $this->model = $this->getModel("UserModel");
    }
    function
    default()
    {
        Header("location:" . URL . "Register");
    }
    function index()
    {
        if (isset($_SESSION["email"])) {
            Header("Location:" . URL . "");
        } else {
            $this->getView("Register");
        }
    }

    function register()
    {
        if (isset($_POST['register'])) {
            $email = $_POST["email"];
            if (!empty($this->model->getUserByEmail($email))) {
                $this->fail = true;
                $this->index();
                // Header("Location:http://localhost/Doanweb/Register");
            } else {
                $data = [
                    'user_name' => $_POST['ho'] . ' ' . $_POST['ten'],
                    'user_email' => $_POST["email"],
                    'user_password' => $_POST["password"],
                    'user_role' => 1
                ];

                $this->model->addUser($data);
                Header("Location:" . URL . "Login");
            }
        }
    }
}
