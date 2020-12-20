<?php
class Home extends Controller
{
    private $productModel;
    function __construct()
    {
        $this->productModel = $this->getModel("ProductModel");
    }
    function SayHi()
    {

        $this->getView("TrangChu", [
            "product" => $this->productModel->getProductByCategoryId(1),
        ]);
    }

    function show()
    {
    }
}
