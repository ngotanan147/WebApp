<?php
class Bill extends Controller
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

        $this->getView("" . URL . "", []);
    }
}
