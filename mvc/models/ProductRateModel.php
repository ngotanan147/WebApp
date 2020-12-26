<?php
class ProductRateModel extends BaseModel
{

    const TABLE = 'product_rate';
    public function getProductRate()
    {
        $qr = "Select * from product_rate";
        return $this->execute($qr);
    }
    public function getAll()
    {
        return $this->all(self::TABLE);
    }

    public function deleteProductRate($id)
    {
        $this->delete(self::TABLE, $id);
    }

    public function addProductRate($data = [])
    {
        $this->create(self::TABLE, $data);
    }

    public function editProductRate($id, $data = [])
    {
        $this->updatee(self::TABLE, $id, $data);
    }

    public function getProductRateByProductId($product_id)
    {
        $qr = "SELECT * FROM product_rate WHERE product_id = '$product_id'";

        $query = $this->execute($qr);
        $data = [];
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($data, $row);
        }

        return $data;
    }

    public function getAVGRate($id)
    {
        $qr = "SELECT AVG(rate_value) FROM product_rate WHERE product_id = '$id'";

        $query = $this->execute($qr);
        $data = [];
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($data, $row);
        }

        return $data;
    }

    public function getProductRateByUserID($user_id, $product_id)
    {
        $qr = "SELECT * FROM product_rate WHERE user_id = '$user_id' and product_id = '$product_id'";

        $query = $this->execute($qr);
        $data = [];
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($data, $row);
        }

        return $data;
    }

    public function updateProductRate($user_id, $new_value)
    {
        $qr = "update product_rate set rate_value = '$new_value' where user_id = '$user_id'";

        $this->execute($qr);
    }

    public function getTotalRate($id)
    {
        $qr = "SELECT count(*) FROM product_rate WHERE product_id = '$id'";

        $query = $this->execute($qr);
        $data = [];
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($data, $row);
        }

        return $data;
    }
}
