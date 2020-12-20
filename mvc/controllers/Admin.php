<?php
class Admin extends Controller
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
            $this->getViewAdmin("User/User", [
                "user" => $this->model->getUser()
            ]);
        } else {
            $this->getViewAdmin("Login");
        }
    }

    function login()
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
                Header("Location:" . URL . "Admin");
            } else {
                Header("Location:" . URL . "Admin/Login");
            }
        }
    }

    function logout()
    {
        session_start();
        unset($_SESSION["adminEmail"]);
        header("Location:" . URL . "Admin/Login");
    }

    function register() 
    {
        if (isset($_SESSION["adminEmail"])) {
            Header("Location:" . URL . "Admin");
        } else {
            $this->getViewAdmin("Register");
        }
    }

    function registerAction()
    {
        if (isset($_POST['adminRegister'])) {
            $email = $_POST["email"];
            if (!empty($this->model->getUserByEmail($email))) {
                $this->fail = true;
                $this->index();
            } else {
                $data = [
                    'user_name' => $_POST['ho'] . ' ' . $_POST['ten'],
                    'user_email' => $_POST["email"],
                    'user_password' => $_POST["password"],
                    'user_role' => 0
                ];

                $this->model->addUser($data);
                Header("Location:<?php echo URL ?>Admin/Login");
            }
        }
    }


    function deleteUser($id)
    {
        $this->defaultUser();
        $this->model->deleteUser($id);
    }

    function addUser()
    {
        $this->defaultUser();

        if (isset($_POST["addUser"])) {
            $role = 1;
            if ($_POST["role"] == "Admin") {
                $role = 0;
            } else {
                $role = 1;
            }

            $data = [
                'user_name' => $_POST["name"],
                'user_email' => $_POST["email"],
                'user_password' => $_POST["password"],
                'user_role' => $role
            ];
            $this->model->addUser($data);
        }
    }

    function showEditData($id)
    {
        $data = $this->model->getUserById($id);

        $this->getViewAdmin("User/UserEdit", [
            "id" => $data["user_id"],
            "name" => $data["user_name"],
            "email" => $data["user_email"],
            "password" => $data["user_password"],
            "role" => $data["user_role"],
            "user" => $this->model->getUser(),
        ]);
    }

    function editUser($id)
    {
        $this->defaultUser();
        if (isset($_POST["editUser"])) {
            $role = 1;
            if ($_POST["role"] == "Admin") {
                $role = 0;
            } else {
                $role = 1;
            }

            $data =  [
                "user_name" => $_POST["name"],
                "user_email" => $_POST["email"],
                "user_password" => $_POST["password"],
                "user_role" => $role,
            ];

            $this->model->editUser($id, $data);
        }
    }
}
