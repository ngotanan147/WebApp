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
        $this->getView("Product", []);
    }

    function AllProductAPI()
    {
        $data = $this->productModel->getAll();
        $myJson = json_encode($data, JSON_UNESCAPED_UNICODE);

        echo $myJson;
    }

    function productAPI($category_id)
    {
        $data = $this->productModel->getProductByCategoryId(1);
        $myJson = json_encode($data, JSON_UNESCAPED_UNICODE);

        echo $myJson;
    }
}
