<?php
class BillModel extends BaseModel
{

    const TABLE = 'bill';
    public function getBill()
    {
        return $this->all(self::TABLE);
    }

    public function deleteBill($id)
    {
        $this->delete(self::TABLE, $id);
    }

    public function deleteAll($user_id)
    {
        $qr = "delete from Bill where Bill.user_id = $user_id";
        $this->execute($qr);
    }

    public function createBill($data = [])
    {
        $this->create(self::TABLE, $data);
    }

    public function editBill($id, $data = [])
    {
        $this->updatee(self::TABLE, $id, $data);
    }

    public function getBillById($id)
    {
        $qr = "select * from bill where bill.user_id = '$id'";

        $query = $this->execute($qr);
        $data = [];
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($data, $row);
        }

        return $data;
    }

    public function getBillIdByDate($date)
    {
        $qr = "select * from bill where bill.date = '$date'";

        $query = $this->execute($qr);
        $data = [];
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($data, $row);
        }

        return $data;
    }
}
