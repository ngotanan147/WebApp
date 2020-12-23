<?php
class Account extends Controller
{
    private $cartModel;
    private $userModel;
    private $billModel;
    private $billDetailModel;
    function __construct()
    {
        $this->productModel = $this->getModel("ProductModel");
        $this->cartModel = $this->getModel("CartModel");
        $this->userModel = $this->getModel("UserModel");
        $this->billModel = $this->getModel("BillModel");
        $this->billDetailModel = $this->getModel("BillDetailModel");
    }

    function test()
    {
        $data =  $this->billDetailModel->getBillDetailByBillId(14);

        foreach ($data as $key => $value) {
            print_r($value);
            echo "</br>";
        }
        // print_r($data);
        // $data = $this->userModel->getUserByEmail($_SESSION['email']);
        // $bill = $this->billModel->getBillById($data[0]);

        // foreach ($bill as $key => $value) {
        //     print_r($value);
        // }
    }

    function index()
    {
        $data = [];
        if (isset($_SESSION['email'])) {
            $data = $this->userModel->getUserByEmail($_SESSION['email']);
            $quantity = $this->cartModel->sumQuantity($data["user_id"]);
            $bill = $this->billModel->getBillById($data[0]);

            $this->getView("Account", [
                'user' => $data,
                "quantity" => $quantity[0]["sum(quatity)"],
                "bill" => $bill
            ]);
        }
        $this->getView("Account", []);
    }

    function showBillDetail($bill_id)
    {
        $data =  $this->billDetailModel->getBillDetailByBillId($bill_id);

        $myJson = json_encode($data, JSON_UNESCAPED_UNICODE);
        echo $myJson;
    }
}
