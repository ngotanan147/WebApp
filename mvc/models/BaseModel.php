    <?php
    class BaseModel extends Database
    {

        public function execute($sql)
        {
            return mysqli_query($this->con, $sql);
        }

        function getAll()
        {
            $sql = "SELECT * FROM product";
            $this->execute($sql);
        }

        public function all($table, $select = ['*'], $orderby = [])
        {
            $selectList = implode(',', $select);
            $orderbyList = implode(' ', $orderby);

            if ($orderbyList) {
                $sql = "select ${selectList} from ${table} ORDER BY ${orderbyList}";
            } else {
                $sql = "select ${selectList} from ${table}";
            }
            // echo $sql;
            // die();
            $query = $this->execute($sql);
            $data = [];
            while ($row = mysqli_fetch_assoc($query)) {
                array_push($data, $row);
            }

            return $data;
        }

        public function delete($table, $id)
        {
            $columnsNameId = $table . '_id';
            $sql = "DELETE from ${table} WHERE $columnsNameId=${id}";
            // echo $sql;
            // die();
            $this->execute($sql);
        }

        public function create($table, $data = [])
        {
            $columns = implode(',', array_keys($data));

            $valuesList = array_map(function ($v) {
                return "'" . $v . "'";
            }, array_values($data));
            $x = implode(',', $valuesList);

            $sql = "insert into ${table} (${columns}) values (${x})";
            // echo $sql;
            // die();
            $this->execute($sql);
        }

        public function getItemById($table, $columnsNameId, $id)
        {
            $sql = "SELECT * from ${table} where ${columnsNameId} = ${id}";
            $result = $this->execute($sql);

            if (!$result) {
                printf("Error: %s\n", mysqli_error($this->con));
                exit();
            }
            $row = mysqli_fetch_array($result);
            // print_r($row);
            // die();
            return $row;
        }


        public function updatee($table, $id, $data = [])
        {
            $column_id = $table . '_id';
            $list = [];
            foreach ($data as $key => $val) {
                array_push($list, "${key}='" . $val . "'");
            }
            $dataList = implode(',', $list);
            $sql = "UPDATE ${table} set ${dataList} where $column_id =${id}";
            // echo $sql;
            // die();
            $this->execute($sql);
        }
    }
