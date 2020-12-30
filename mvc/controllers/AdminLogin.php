<?php
class AdminLogin extends Controller
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

    function index()
    {
        if (isset($_SESSION["adminEmail"])) {
            Header("Location:" . URL . "Admin");
        } else {
            $this->getViewAdmin("Login");
        }
    }

    function loginAction()
    {
        $email = "";
        $password = "";

        if (isset($_POST["adminLogin"])) {
            $email = $_POST["email"];
            $password  = $_POST["password"];

            $login = $this->model->login($email, $password);
            $user = $this->model->getUserByEmail($email);

            if (!empty($login) && $user['user_role'] == 0) {
                $_SESSION['adminEmail'] = $email;
                Header("Location:" . URL . "AdminLogin");
            } else {
                Header("Location:" . URL . "Admin/Login");
            }
        }
    }
}
