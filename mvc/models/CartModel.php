<?php
class CartModel extends BaseModel
{

    const TABLE = 'cart';
    public function getCart()
    {
        // $qr = "Select * from cart";
        // return $this->execute($qr);

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
}
