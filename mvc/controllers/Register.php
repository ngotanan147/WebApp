<?php
    class Register extends Controller {
        function default(){
            Header("location:http://localhost:8080/Doanweb/Register");
        }
        function SayHi(){   
            if (isset($_SESSION["email"])){
                Header("Location:http://localhost:8080/Doanweb/");
            }
            else{
                $this->getView("Register");
            }
        }
    
        function register(){
            $model = $this->getModel("UserModel");
            $name = "";
            $email = "";
            $password = "";

            if (isset($_POST['register'])){
                $name = $_POST['ho'] . ' ' . $_POST['ten'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                if (!empty($model->getUserByEmail($email))){
                    $this->getView("Register", [
                        'display' => 'block'
                    ]);
                }
                else{
                    $model->addUser($name, $email, $password, 'User');
                    // session_start();
                    // $_SESSION['email'] = $email;
                    // Header("Location:http://localhost:8080/Doanweb/");
                    Header("Location:http://localhost:8080/Doanweb/Login");
                }
            }
        }

    }
?>