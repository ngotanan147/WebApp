<?php
class CartModel extends BaseModel
{

    const TABLE = 'cart';
    public function getCart()
    {
        return $this->all(self::TABLE);
    }

    public function deleteCart($id)
    {
        $this->delete(self::TABLE, $id);
    }

    public function addToCart($data = [])
    {
        $this->create(self::TABLE, $data);
    }

    public function editCart($id, $data = [])
    {
        $this->updatee(self::TABLE, $id, $data);
    }

    public function getCartById($id)
    {
        $columnsNameId = "cart_id";
        return $this->getItemById(self::TABLE, $columnsNameId, $id);
    }

    public function checkIfDuplicate($user_id, $product_id)
    {
        $qr = "Select * from cart c where c.user_id = '$user_id' and c.product_id = '$product_id'";

        $query = $this->execute($qr);
        $data = [];
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($data, $row);
        }

        return $data;
    }

    public function deleteItem($user_id, $product_id)
    {
        $qr = "DELETE from cart WHERE user_id = '$user_id' and product_id = '$product_id'";

        // echo $qr;
        // die();
        $this->execute($qr);
    }

    public function getCartByUserId($user_id)
    {
        $qr = "Select * from cart c where c.user_id = '$user_id'";

        $query = $this->execute($qr);
        $data = [];
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($data, $row);
        }

        return $data;
    }

    public function updateQuantity($user_id, $product_id, $new_quantity, $total)
    {
        $qr = "update cart c set c.quatity = $new_quantity, c.total = $total where c.user_id = '$user_id' and c.product_id = '$product_id'";

        $this->execute($qr);
    }

    public function sumQuantity($user_id)
    {
        $qr = "select sum(quatity) from cart c where c.user_id = '$user_id'";

        $query = $this->execute($qr);
        $data = [];
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($data, $row);
        }

        return $data;
    }
}
