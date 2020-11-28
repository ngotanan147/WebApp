<?php
    class ProductModel extends Database{

        public function getProduct(){
            $qr = "Select * from product";
            return mysqli_query($this->con, $qr);
        }

        public function deleteProduct($id){
            $qr="DELETE from product WHERE product_id='$id'";
            return mysqli_query($this->con, $qr);
        }

        public function addProduct($name, $image, $price, $description, $category_id, $category_name){
            $qr = "INSERT INTO product VALUES (NULL,'$name','$image','$price', '$description', '$category_id', '$category_name')";
            return mysqli_query($this->con, $qr);  
        }

    }
?>  