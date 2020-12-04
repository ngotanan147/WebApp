<?php
class UserModel extends BaseModel
{

    const TABLE = "user";
    public function getUser()
    {
        $qr = "Select * from user";
        return mysqli_query($this->con, $qr);
    }

    public function addUser($data = [])
    {
        // $qr = "INSERT INTO user(user_id, user_name, user_email, user_password, user_role) VALUES (NULL,'$name','$email','$password', '$role')";
        // return mysqli_query($this->con, $qr);   
        $this->create(self::TABLE, $data);
    }

    public function deleteUser($id)
    {
        $this->delete(self::TABLE, $id);
    }

    public function editUser($id, $data=[])
    {
        $this->updatee(self::TABLE, $id, $data);
    }

    public function getUserById($id)
    {
        $qr = "Select * from user where user_id='$id'";
        $result = mysqli_query($this->con, $qr);

        if (!$result) {
            printf("Error: %s\n", mysqli_error($this->con));
            exit();
        }
        $row = mysqli_fetch_array($result);
        return $row;
    }

    public function getUserByEmail($email)
    {
        $qr = "Select * from user where user_email='$email'";
        $result = mysqli_query($this->con, $qr);

        if (!$result) {
            printf("Error: %s\n", mysqli_error($this->con));
            exit();
        }
        $row = mysqli_fetch_array($result);
        return $row;
    }

    public function login($email, $password)
    {
        $qr = "Select * from user where user_email = '$email' and user_password = '$password'";
        $result = mysqli_query($this->con, $qr);
        if (!$result) {
            printf("Error: %s\n", mysqli_error($this->con));
            exit();
        }
        $row = mysqli_fetch_array($result);
        return $row;
    }
}
