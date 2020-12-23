<?php
class BillDetailModel extends BaseModel
{

    const TABLE = 'bill_detail';
    public function getBillDetail()
    {
        return $this->all(self::TABLE);
    }

    public function deleteBillDetail($id)
    {
        $this->delete(self::TABLE, $id);
    }

    public function deleteAll($user_id)
    {
        $qr = "delete from BillDetail where BillDetail.user_id = $user_id";
        $this->execute($qr);
    }

    public function createBillDetail($data = [])
    {
        $this->create(self::TABLE, $data);
    }

    public function editBillDetail($id, $data = [])
    {
        $this->updatee(self::TABLE, $id, $data);
    }

    public function getBillDetailByBillId($bill_id)
    {
        $qr = "select * from bill_detail where bill_detail.bill_id = '$bill_id'";

        $query = $this->execute($qr);
        $data = [];
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($data, $row);
        }

        return $data;
    }

    public function getBillDetailIdByDate($date)
    {
        // $qr = "select * from BillDetail where  "
    }
}
