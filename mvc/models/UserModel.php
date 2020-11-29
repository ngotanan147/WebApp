<?php
    class UserModel extends Database{

        public function getUser(){
            $qr = "Select * from user";
            return mysqli_query($this->con, $qr);
        }

        public function addUser($name, $email, $password, $role){
            $qr = "INSERT INTO user(user_id,user_name, user_email, user_password, user_role) VALUES (NULL,'$name','$email','$password', '$role')";
            return mysqli_query($this->con, $qr);   
        }

        public function deleteUser($id){
            $qr="DELETE from user WHERE user_id='$id'";
            return mysqli_query($this->con, $qr);
        }

        public function editUser($id , $name, $email, $password, $role){
            $qr="UPDATE user set 
            user_name ='$name',
            user_email ='$email',
            user_password = '$password',
            user_role = '$role' WHERE user_id='$id'";
            
            return mysqli_query($this->con, $qr);
        }

        public function getUserById($id){
            $qr = "Select * from user where user_id='$id'";
            $result = mysqli_query($this->con,$qr);

            if (!$result) {
                printf("Error: %s\n", mysqli_error($this->con));
                exit();
            }
            $row = mysqli_fetch_array($result);
            return $row;
            
        }

        public function login($email, $password){
            $qr = "Select * from user where user_email = '$email' and user_password = '$password'";
            $result = mysqli_query($this->con,$qr);
            if (!$result) {
                printf("Error: %s\n", mysqli_error($this->con));
                exit();
            }
            $row = mysqli_fetch_array($result);
            return $row;
        }

    }
?>  