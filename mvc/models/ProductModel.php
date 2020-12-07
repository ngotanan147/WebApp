<?php
class ProductModel extends BaseModel
{

    const TABLE = 'product';
    public function getProduct()
    {
        $qr = "Select * from product";
        // mysqli_query($this->con, $qr);
        return $this->execute($qr);
    }

    public function deleteProduct($id)
    {
        $this->delete(self::TABLE, $id);
    }

    public function addProduct($data = [])
    {
        $this->create(self::TABLE, $data);
    }

    public function editProduct($id, $data = [])
    {
        $this->updatee(self::TABLE, $id, $data);
    }

    public function getProductById($id)
    {
        // $table, $columnsNameId, $id
        $columnsNameId = "product_id";
        return $this->getItemById(self::TABLE, $columnsNameId, $id);
    }
}
