<?php
class CartModel extends BaseModel
{

    const TABLE = "cart";
    public function getCart()
    {
        $qr = "Select * from cart";
        return mysqli_query($this->con, $qr);
    }

}
