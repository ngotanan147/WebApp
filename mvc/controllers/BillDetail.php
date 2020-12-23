<?php
class BillDetail extends Controller
{
    private $userModel;
    private $billDetailModel;
    function __construct()
    {
        $this->userModel = $this->getModel("UserModel");
        $this->billDetailModel = $this->getModel("BillDetailModel");
    }

    function test()
    {
        $data = $this->userModel->getUserByEmail($_SESSION['email']);
        print_r($data["user_name"]);
    }

    function index()
    {
        $data = [];
        if (isset($_SESSION['email'])) {
            $data = $this->userModel->getUserByEmail($_SESSION['email']);
            $this->getView("Account", [
                'user' => $data
            ]);
        }
        $this->getView("Account", []);
    }

    function showBillDetail($bill_id)
    {
    }
}
