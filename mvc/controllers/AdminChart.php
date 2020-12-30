<?php
class AdminChart extends Controller
{
    private $userModel;
    private $productModel;
    private $billModel;

    function __construct()
    {
        $this->userModel = $this->getModel("UserModel");
        $this->productModel = $this->getModel("ProductModel");
        $this->billModel = $this->getModel("BillModel");
    }

    function test()
    {
        $total_user = $this->userModel->countUser();
        print_r($this->billModel->revenue());
    }


    function index()
    {
        if (isset($_SESSION["adminEmail"])) {
            $total_user = $this->userModel->countUser();
            $total_product = $this->productModel->countProduct();
            $total_bill = $this->billModel->countBill();
            $revenue = $this->billModel->revenue();
            $this->getViewAdmin("Chart/Chart", [
                'totalUser' => $total_user[0]["count(*)"],
                'totalProduct' => $total_product[0]["count(*)"],
                'totalBill' => $total_bill[0]["count(*)"],
                'revenue' => $revenue[0]["sum(total)"],
            ]);
        } else {
            $this->getViewAdmin("Login");
        }
    }
}
