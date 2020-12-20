<?php
class Account extends Controller
{
    private $model;
    function __construct()
    {
        $this->model = $this->getModel("UserModel");
    }
    function index()
    {
        $this->getView("Account", []);
    }
}
