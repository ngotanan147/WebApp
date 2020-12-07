<?php
class Account extends Controller
{
    private $model;
    function __construct()
    {
        $this->model = $this->getModel("UserModel");
    }
    function SayHi()
    {
        $this->getView("Account", [
         
        ]);
    }

    


}
