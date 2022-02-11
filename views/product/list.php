

<h3>DANH SÁCH SẢN PHẨM</h3>
<a href="?action=new">Thêm sản phẩm</a>


<table class="table table-striped">
	<tr>
		<th>Tên sản phẩm</th>
		<th>Ảnh sản phẩm</th>
		<th>Tên danh mục</th>
		<th>Kiểu</th>
		<th>Cỡ</th>
		<th>Trọng lượng</th>
		<th>Giá mới</th>
		<th>Giá cũ</th>
		<th>Mô tả</th>
		<th>Số lượt xem</th>
		<th>Số lượt mua</th>
		<th>Nhà sản xuất</th>
		<th>Thao tác</th>
	</tr>

	<?php 

	$rows = $data['products'];



		while($row = mysqli_fetch_array($rows))
		{
	?>
	<tr>
		<td><?php echo $row['name'];?></td>
		<td><?php 
			if(file_exists("uploads/{$row['id']}.jpg"))
			{
				?>
				<img src="<?php echo "uploads/{$row['id']}.jpg";?>" width="100" height="75">
			<?php
			}
		?></td>

		<td><?php echo $row['c_name'];?></td>
		<td><?php echo $row['s_name'];?></td>
		<td><?php echo $row['size'];?></td>
		<td><?php echo $row['weight'];?></td>
		<td><?php echo $row['price'];?></td>
		<td><?php echo $row['old_price'];?></td>
		<td><?php echo $row['description'];?></td>
		<td><?php echo $row['viewed'];?></td>
		<td><?php echo $row['sold'];?></td>
		<td><?php echo $row['pa_name'];?></td>
		<td>
			<a href="?module=product&action=edit&id=<?php echo $row['id'];?>"> Sửa</a>	|
			<a href="?module=product&action=delete&id=<?php echo $row['id'];?>"> Xoá</a>	
		</td>
	</tr>

	<?php
		}
	?>



</table>
