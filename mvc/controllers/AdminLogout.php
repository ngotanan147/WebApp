<?php
class AdminLogout extends Controller
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
        session_start();
        unset($_SESSION["adminEmail"]);
        header("Location:" . URL . "Admin/Login");
    }
}
