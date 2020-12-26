<?php
class ProductDetail extends Controller
{
    private $productModel;
    private $userModel;
    private $productRateModel;
    function __construct()
    {
        $this->userModel = $this->getModel("UserModel");
        $this->productModel = $this->getModel("ProductModel");
        $this->productRateModel = $this->getModel("ProductRateModel");
    }

    function test()
    {
        // $user = $this->userModel->getUserByEmail($_SESSION['email']);
        // $product_rate = $this->productRateModel->getProductRateByProductId(35);

        // print_r($product_rate[0]["rate_value"]);

        $user = $this->userModel->getUserByEmail($_SESSION['email']);
        $isExistUser = $this->productRateModel->getProductRateByUserID($user["user_id"], 0);

        print_r($isExistUser);
        // echo $avg_rate[0]["AVG(rate_value)"] . "/" . $total_rate[0]["cou nt(product_id)"];
    }

    function index()
    {
        $this->getView("ProductDetail", []);
    }

    function detail($product_id)
    {
        $data = $this->productModel->getProductById($product_id);
        $total_rate = $this->productRateModel->getTotalRate($product_id);
        $avg_rate = $this->productRateModel->getAVGRate($product_id);
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
            'popular_product' => $popular_product,
            'avg_rate' => round($avg_rate[0]["AVG(rate_value)"], 1),
            'total_rate' => $total_rate[0]["count(*)"],
        ]);
    }


    function rate($product_id, $value)
    {
        if (isset($_SESSION['email'])) {
            $user = $this->userModel->getUserByEmail($_SESSION['email']);
            $isExistUser = $this->productRateModel->getProductRateByUserID($user["user_id"], $product_id);
            if (empty($isExistUser)) {
                $rate_data = [
                    'rate_value' => $value,
                    'product_id' => $product_id,
                    'user_id' => $user["user_id"],
                ];

                $this->productRateModel->addProductRate($rate_data);
            } else {
                $this->productRateModel->updateProductRate($user["user_id"], $value);
            }

            $avg_rate = $this->productRateModel->getAVGRate($product_id);
            $total_rate = $this->productRateModel->getTotalRate($product_id);
            echo round($avg_rate[0]["AVG(rate_value)"], 1) . "/" . $total_rate[0]["count(*)"];
        } else {
            echo "error";
        }
    }
}
