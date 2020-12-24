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

    function test()
    {
        $data = $this->productModel->searchByName("La");
    }

    function index()
    {
        if (isset($_POST["search"])) {
            $data = $this->productModel->searchByName($_POST["name_search"]);
            $this->getView("Search", [
                "result" => $data
            ]);
        }
    }
}
