<div>
    <div style="text-align: center">
           <a style="text-decoration: none" href="showAddProduct">
                <button>Thêm sản phẩm</button>
           </a>
    </div>

    <form action="">
        <table width="900" border="1px solid #ccc;" align="center" style="margin-top: 10px; text-align: center;">
            <tr>
				<th width="50px;">ID</th>
				<th width="100px;">Tên sản phẩm</th>
				<th width="100px;">Giá</th>
				<th width="100px;">Mô tả</th>
				<th width="100px;">Phân loại</th>
                <th width="100px;">Chức năng</th>
			</tr>
            <?php  
				while($row = mysqli_fetch_array($data["product"])){
			?>
			    <tr>
					<td><?php echo $row["product_id"]; ?> </td>
					<td><?php echo $row['product_name']; ?> </td>
					<td><?php echo $row['product_price']; ?></td>
					<td><?php echo $row['product_description']; ?></td>
                    <td><?php echo $row['categories_name']; ?></td>
					<td><a href="./showEditProduct/<?php echo $row['product_id']; ?>">Sửa</a>
					    <a
						href="./delete/<?php echo $row['product_id']; ?>">Xóa</a>
					</td>
				</tr>
			<?php } ?>

        </table>
    </form>
</div>