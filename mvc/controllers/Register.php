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
        Header("location:http://localhost/Doanweb/Register");
    }
    function SayHi()
    {
        if (isset($_SESSION["adminEmail"])) {
            Header("Location:http://localhost/Doanweb/");
        } else if ($this->fail) {
            $this->getView("Register", [
                'display' => 'block',
            ]);
        } else {
            $this->getView("Register");
        }
    }

    function register()
    {
        if (isset($_POST['adminRegister'])) {
            $email = $_POST["email"];
            if (!empty($this->model->getUserByEmail($email))) {
                $this->fail = true;
                $this->SayHi();
                // Header("Location:http://localhost/Doanweb/Register");
            } else {
                $data = [
                    'user_name' => $_POST['ho'] . ' ' . $_POST['ten'],
                    'user_email' => $_POST["email"],
                    'user_password' => $_POST["password"],
                    'user_role' => 0
                ];

                $this->model->addUser($data);
                Header("Location:http://localhost/Doanweb/Login");
            }
        }
    }
}
