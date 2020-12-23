<?php
class Payment extends Controller
{
    private $productModel;
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
        $user = $this->userModel->getUserByEmail($_SESSION['email']);
        $cart_data = $this->cartModel->getCartByUserId($user[0]);
        $bill = $this->billModel->getBillIdByDate("2020/12/23 09:11:15");
        print_r($this->billModel->getBillIdByDate("2020/12/23 09:11:15")[0]["bill_id"]);

        // echo "</br>";

        // print_r($cart_data[0]);

        // echo "</br>";

        // foreach ($cart_data as $key => $value) {
        //     print_r($value);
        //     echo "</br>";
        // }

        // print_r($cart_data);

        // $total = 0;
        // foreach ($cart_data as $key => $value) {
        //     $total += $value["product_price"] * $value["quatity"];
        // }
        // echo $total;
    }

    function index()
    {
        $data = [];
        if (isset($_SESSION['email'])) {
            $user = $this->userModel->getUserByEmail($_SESSION['email']);
            $data = $this->cartModel->getCartByUserId($user["user_id"]);

            $quantity = $this->cartModel->sumQuantity($user["user_id"]);
            $this->getView("Payment", [
                "cart" => $data,
            ]);
        } else {
            if (isset($_SESSION['cart'])) {
                $data = $_SESSION['cart'];

                $this->getView("Payment", [
                    "cart" => $data,
                ]);
            } else {
                $this->getView("Payment", []);
            }
        }
    }

    function paymentDone($address)
    {
        if (!isset($_SESSION['email'])) {
            unset($_SESSION['cart']);
            header("Location:" . URL . "");
        } else {
            $user = $this->userModel->getUserByEmail($_SESSION['email']);
            $cart_data = $this->cartModel->getCartByUserId($user[0]);

            $bill = $this->billModel->getBillIdByDate("2020/12/23 09:11:15");

            $total = 0;
            foreach ($cart_data as $key => $value) {
                $total += $value["product_price"] * $value["quatity"];
            }

            $date = date("Y-m-d H:i:s");

            //Create bill
            $data_bill = [
                'user_id' => $cart_data[0]["user_id"],
                'total' => $total,
                'address' => $address,
                'date' => $date,
            ];

            $this->billModel->createBill($data_bill);

            //Create bill detail
            foreach ($cart_data as $key => $value) {
                $data_bill_detail = [
                    'bill_id' => $this->billModel->getBillIdByDate($date)[0]["bill_id"],
                    'product_id' => $value["product_id"],
                    'product_name' => $value["product_name"],
                    'product_image' => $value["product_image"],
                    'price' => $value["product_price"],
                    'quantity' => $value["quatity"]
                ];
                $this->billDetailModel->createBillDetail($data_bill_detail);
            }

            $this->cartModel->deleteAll($user["user_id"]);
            header("Location:" . URL . "");
        }
    }
}
