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
        Header("location:http://localhost/Doanweb/AdminProduct");
    }

    function SayHi()
    {

        $this->getViewAdmin("Product", [
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

    function editProduct($id)
    {
        $this->default();
        if (isset($_POST["editUser"])) {
            $path = "./mvc/assets/img/";
            $tmp_name = $_FILES['image']['tmp_name'];
            $img = $_FILES['image']['name'];
            move_uploaded_file($tmp_name, $path . $img);

            $data =  [
                'product_name' => $_POST["name"],
                'product_image' => $img,
                'product_price' => $_POST["price"],
                'product_description' => $_POST["description"],
                'categories_id' => $_POST["category_id"],
                'categories_name' => $_POST["category_name"],
            ];

            $this->model->editProduct($id, $data);
        }
    }
}
