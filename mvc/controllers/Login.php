<?php
    class Login extends Controller {
        function default(){
            Header("location:http://localhost:8080/Doanweb/Login");
        }
        function SayHi(){   
            $this->getView("Login",[
            ]);
        }
    
        function log(){
            $model = $this->getModel("UserModel");
            $email = "";
            $password = "";

            if (isset($_POST["login"])){
                $email = $_POST["email"];
                $password  = $_POST["password"];
                $_SESSION['email'] = $_POST["email"];
            }
            $login = $model->login($email, $password);
            
            
            if (empty($login)){
                $this->getView("Login", [
                    "success" => 'block',
                ]);

            } else{
                Header("Location:http://localhost:8080/Doanweb/");
            }
        }
    }
?>