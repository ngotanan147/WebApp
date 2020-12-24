<?php
class ProductDetail extends Controller
{
    private $productModel;
    private $userModel;
    function __construct()
    {
        $this->userModel = $this->getModel("UserModel");
        $this->productModel = $this->getModel("ProductModel");
    }

    function test()
    {
        $data = $this->productModel->getProductById(41);
        $same_product = $this->productModel->getProductByCategoryId(2);
        foreach ($same_product as $key => $value) {
            if ($value["product_id"] == 41) {
                unset($same_product[$key]);
            }
        }
        print_r($same_product);
    }

    function index()
    {
        $this->getView("ProductDetail", []);
    }

    function detail($product_id)
    {
        $data = $this->productModel->getProductById($product_id);
        $same_product = $this->productModel->getProductByCategoryId($data["categories_id"]);
        $popular_product = $this->productModel->getProductByCategoryId(1);

        foreach ($same_product as $key => $value) {
            if ($value["product_id"] == $product_id) {
                unset($same_product[$key]);
            }
        }

        $this->getView("ProductDetail", [
            'product_id' => $data["product_id"],
            'product_name' => $data["product_name"],
            'product_image' => $data["product_image"],
            'product_price' => $data["product_price"],
            'product_description' => $data["product_description"],
            'category_id' => $data["categories_id"],
            'same_product' => $same_product,
            'popular_product' => $popular_product
        ]);
    }
}
