<?php
class BillDetail extends Controller
{
    private $userModel;
    function __construct()
    {
        $this->userModel = $this->getModel("UserModel");
    }

    function test()
    {
        $data = $this->userModel->getUserByEmail($_SESSION['email']);
        print_r($data["user_name"]);
    }

    function index()
    {
        $data = [];
        if (isset($_SESSION['email'])) {
            $data = $this->userModel->getUserByEmail($_SESSION['email']);
            $this->getView("Account", [
                'user' => $data
            ]);
        }
        $this->getView("Account", []);
    }
}
