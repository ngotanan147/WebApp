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
        $this->getView("Product", [
            "product" => $this->productModel->getProduct(),
            "cookies" => $this->item_data,
        ]);
    }


    function productDetail($id)
    {
        $data = $this->productModel->getProductById($id);

        $this->item_data = array(
            'product_id' => $data['product_id'],
            'product_name' => $data['product_name'],
            'product_description' => $data['product_description'],
            'product_price' => $data['product_price'],
            'product_image' => $data['product_image'],
            'category' => $data['categories_name'],
            'category_id' => $data['categories_id']
        );

        $this->index();
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
