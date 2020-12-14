<?php
class AdminProduct extends Controller
{
    private $model;
    function __construct()
    {
        $this->model = $this->getModel("ProductModel");
    }

    function
    default()
    {
        Header("location:" . URL ."AdminProduct");
    }

    function SayHi()
    {

        $this->getViewAdmin("Product/Product", [
            "product" => $this->model->getProduct()
        ]);
    }
    // Product ------------------------------------------------------------------------------------------------
    function deleteProduct($id)
    {
        $this->default();
        $this->model->deleteProduct($id);
    }

    function addProduct()
    {
        $this->default();

        if (isset($_POST["addProduct"])) {
            $path = "./mvc/assets/img/";
            $tmp_name = $_FILES['image']['tmp_name'];
            $img = $_FILES['image']['name'];
            move_uploaded_file($tmp_name, $path . $img);

            $data = [
                
                'product_name' => $_POST["name"],
                'product_image' => $img,
                'product_price' => $_POST["price"],
                'product_description' => $_POST["description"],
                'categories_id' => $_POST["category_id"],
                'categories_name' => $_POST["category_name"],
            ];
            $this->model->addProduct($data);
        }
    }

    function showEditData($id)
    {
        $data = $this->model->getProductById($id);
        // print_r($data);
        // die();
        $this->getViewAdmin("Product/ProductEdit", [
            "product" => $this->model->getProduct(),
            'id' =>$data['product_id'],
            'name' => $data['product_name'],
            'image' => $data['product_image'],
            'price' => $data['product_price'],
            'description' => $data['product_description'],
            'category_id' => $data['categories_id'],
            'category_name' => $data['categories_name'],
        ]);
    }

    function editProduct($id)
    {
        if (isset($_POST["editProduct"])) {
            $path = "./mvc/assets/img/";
            $tmp_name = $_FILES['image']['tmp_name'];
            $img = $_FILES['image']['name'];
            move_uploaded_file($tmp_name, $path . $img);

            $data = [
                'product_name' => $_POST["name"],
                'product_image' => $img,
                'product_price' => $_POST["price"],
                'product_description' => $_POST["description"],
                'categories_id' => $_POST["category_id"],
                'categories_name' => $_POST["category_name"],
            ];

            $this->model->editProduct($id, $data);
            $this->default();
        }
    }
}
