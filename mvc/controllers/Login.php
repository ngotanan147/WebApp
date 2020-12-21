<?php
class Login extends Controller
{
    function
    default()
    {
        Header("location:" . URL . "Doanweb/Login");
    }
    function index()
    {
        if (isset($_SESSION["email"])) {
            header("Location:" . URL . "Doanweb/");
        } else {
            $this->getView("Login");
        }
    }

    function test()
    {
        $model = $this->getModel("UserModel");
        $login = $model->login("Ngotanan147@gmail.com", "1212");

        foreach ($login as $key => $value) {
            print_r($value);
            echo "</br>";
        }
        if (empty($login)) {
            echo "sdsdsd";
        }
        print_r($login[0]["user_role"]);
    }

    function log()
    {
        $model = $this->getModel("UserModel");
        $email = "";
        $password = "";

        if (isset($_POST["login"])) {
            $email = $_POST["email"];
            $password  = $_POST["password"];
        }

        $login = $model->login($email, $password);

        if (empty($login) || $login[0]["user_role"] != 1) {
            $this->getView("Login", [
                "success" => 'block',
            ]);
        } else {
            $_SESSION['email'] = $email;
            Header("Location:" . URL . "");
        }
    }
}
