<?php
class BillModel extends BaseModel
{

    const TABLE = 'Bill';
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

    public function addToBill($data = [])
    {
        $this->create(self::TABLE, $data);
    }

    public function editBill($id, $data = [])
    {
        $this->updatee(self::TABLE, $id, $data);
    }

    public function getBillById($id)
    {
        $columnsNameId = "Bill_id";
        return $this->getItemById(self::TABLE, $columnsNameId, $id);
    }

}
