<?php
class Admin extends Controller {

    function defaultUser(){
        Header("location:http://localhost/Doanweb/Admin");
    }

    function SayHi(){
        $user = $this->getModel("UserModel");

        $this->getViewAdmin("User", [
            "user" => $user->getUser()
        ]);

    }

    function deleteUser($id){
        $this->defaultUser();
        $user = $this->getModel("UserModel");
        $user->deleteUser($id);

        $this->getViewAdmin("User", [
            "user" => $user->getUser(),
        ]);
    }

    function addUser(){
        $this->defaultUser();
        $user = $this->getModel("UserModel");

        if (isset($_POST["addUser"])){
            $name = $_POST["name"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            if ($_POST["role"] == "Admin"){
                $role = 0;
            } else {
                $role = 1;
            }
            $user->addUser($name, $email, $password, $role);
        }   

    }

    function showEditData($id){
        $user = $this->getModel("UserModel");
        $data = $user->getUserById($id);

        $this->getViewAdmin("UserEdit", [
            "id" => $data["user_id"],
            "name" => $data["user_name"],
            "email" => $data["user_email"],
            "password" => $data["user_password"],
            "role" => $data["user_role"],
            "user" => $user->getUser(),

        ]);
        
    }

    function editUser($id){
        $this->defaultUser();
        $user = $this->getModel("UserModel");
        if (isset($_POST["editUser"])){
            $name = $_POST["name"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            if ($_POST["role"] == "Admin"){
                $role = 0;
            } else {
                $role = 1;
            }
            $user->editUser($id ,$name, $email, $password, $role);
        }

        $this->getViewAdmin("User", [
            "user" => $user->getUser(),
        ]);
    }

    // Product ------------------------------------------------------------------------------------------------
    function productDefault(){
        Header("location:http://localhost/Doanweb/Admin/product");
    }

    function product(){
        $model = $this->getModel("ProductModel");

        $this->getViewAdmin("Product", [
            "product" => $model->getProduct()
        ]);
    }

    function deleteProduct($a ,$id){
        $this->defaultUser();
        $product = $this->getModel("ProductModel");
        $product->deleteProduct($id);   

        $this->getViewAdmin("Product", [
            "product" => $product->getProduct(),
        ]);
    }

}
