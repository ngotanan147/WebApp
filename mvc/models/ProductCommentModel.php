<?php
class ProductCommentModel extends BaseModel
{

    const TABLE = 'product_comment';
    public function getProductComment()
    {
        $qr = "Select * from product_comment";
        return $this->execute($qr);
    }
    public function getAll()
    {
        return $this->all(self::TABLE);
    }

    public function deleteProductComment($id)
    {
        $this->delete(self::TABLE, $id);
    }

    public function addProductComment($data = [])
    {
        $this->create(self::TABLE, $data);
    }

    public function editProductComment($id, $data = [])
    {
        $this->updatee(self::TABLE, $id, $data);
    }

    public function getCommentByProductId($product_id)
    {
        $qr = "SELECT * FROM product_comment WHERE product_id = '$product_id'";

        $query = $this->execute($qr);
        $data = [];
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($data, $row);
        }

        return $data;
    }


    public function updateLike($comment_id, $new_value)
    {
        $qr = "update product_comment set comment_like = '$new_value' where comment_id = '$comment_id'";

        $this->execute($qr);
    }

    public function getLikeByCommentId($comment_id)
    {
        $qr = "select comment_like from product_comment where comment_id = '$comment_id'";

        $query = $this->execute($qr);
        $data = [];
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($data, $row);
        }

        return $data;
    }

    public function getLastInsertId()
    {
        return $this->getLastInsertId();
    }

    public function getIdJustInserted()
    {
        $qr = "SELECT max(comment_id) from product_comment";

        $query = $this->execute($qr);
        $data = [];
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($data, $row);
        }

        return $data;
    }
}
