<?php
class ProductModel extends BaseModel
{

    const TABLE = 'product';
    public function getProduct()
    {
        $qr = "Select * from product";
        return $this->execute($qr);
    }
    public function getAll()
    {

        return $this->all(self::TABLE);
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
        $columnsNameId = "product_id";
        return $this->getItemById(self::TABLE, $columnsNameId, $id);
    }

    public function getProductByCategoryId($category_id)
    {
        $qr = "SELECT * from product where categories_id = $category_id";

        $query = $this->execute($qr);

        $data = [];
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($data, $row);
        }

        return $data;
    }

    public function searchByName($name_search)
    {
        $qr = "select * from product where product_name like '%$name_search%'";

        $query = $this->execute($qr);
        $data = [];
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($data, $row);
        }

        return $data;
    }
}
