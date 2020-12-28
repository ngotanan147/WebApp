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

        $this->create(self::TABLE, $data);
    }

    public function deleteUser($id)
    {
        $this->delete(self::TABLE, $id);
    }

    public function editUser($id, $data = [])
    {
        $this->updatee(self::TABLE, $id, $data);
    }

    public function updateAvatar($id, $image)
    {
        $qr = "Update user set user_avatar = '$image' where user_id = '$id'";
        $this->execute($qr);
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

        $query = $this->execute($qr);
        $data = [];
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($data, $row);
        }

        return $data;
    }
}
