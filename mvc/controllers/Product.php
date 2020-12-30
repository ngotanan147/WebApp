<?php
class Product extends Controller
{
    private $productModel;
    private $item_data;

    function __construct()
    {
        $this->productModel = $this->getModel("ProductModel");
    }

    function index()
    {
        $data = $this->productModel->getAll();
        $this->getView("Product", [
            'product' => $data
        ]);
    }

    function rate($id)
    {
    }

    function Product($category_id)
    {
        echo $category_id;
    }
}
