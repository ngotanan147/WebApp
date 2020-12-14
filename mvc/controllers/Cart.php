<?php
class Cart extends Controller
{
    private $model;
    function __construct()
    {
        $this->model = $this->getModel("CartModel");
    }

    function SayHi()
    {
        $this->getView("Cart", [
            "cart" => $this->model->getCart()
        ]);
    }
    

}
