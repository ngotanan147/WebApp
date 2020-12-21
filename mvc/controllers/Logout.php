<?php
class Logout extends Controller
{
    function
    default()
    {
        Header("location:" . URL . "Login");
    }

    function index()
    {
        session_start();
        unset($_SESSION["email"]);
        header('Location:' . URL . 'Login');
    }
}
