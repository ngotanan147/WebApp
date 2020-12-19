<?php
class Logout extends Controller
{
    function
    default()
    {
        Header("location:" . URL . "Login");
    }

    function SayHi()
    {
        session_start();
        unset($_SESSION["email"]);
        header('Location:http://localhost/Doanweb/Login');
    }
}
