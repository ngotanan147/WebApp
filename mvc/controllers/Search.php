<?php
class Search extends Controller
{

    private $cartModel;
    private $userModel;
    function __construct()
    {
        $this->productModel = $this->getModel("ProductModel");
        $this->cartModel = $this->getModel("CartModel");
        $this->userModel = $this->getModel("UserModel");
    }

    function index()
    {
        $this->getView("Search", []);
    }
}
