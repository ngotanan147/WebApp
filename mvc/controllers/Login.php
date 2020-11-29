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
            }
            $login = $model->login($email, $password);
            print_r($login);
            
            //Xử lí logina
            $isSuccess = false;
            if (empty($login)){
                $this->getView("Login", [
                    "isSuccess" => $isSuccess
                ]);
            } else{
                Header("Location:http://localhost:8080/Doanweb/");
            }
        }
    }
?>