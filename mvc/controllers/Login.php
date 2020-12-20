<?php
class Login extends Controller
{
    function
    default()
    {
        Header("location:http://localhost/Doanweb/Login");
    }
    function index()
    {
        if (isset($_SESSION["email"])) {
            Header("Location:http://localhost/Doanweb/");
        } else {
            $this->getView("Login");
        }
    }

    function log()
    {
        $model = $this->getModel("UserModel");
        $email = "";
        $password = "";

        if (isset($_POST["login"])) {
            $email = $_POST["email"];
            $password  = $_POST["password"];
            $_SESSION['email'] = $_POST["email"];
        }
        $login = $model->login($email, $password);

        if (empty($login)) {
            $this->getView("Login", [
                "success" => 'block',
            ]);
        } else {
            Header("Location:" . URL . "");
        }
    }
}
