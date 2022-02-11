<div class="container" style="padding:20px">
<h3>THÊM SẢN PHẨM</h3>
<form action="?module=product&action=insert" method="POST" enctype="multipart/form-data"
class="row" 
>
	<div class="form-group row">
		<label for="name" class="form-label">
			Tên sản phẩm
		</label>
		<input class="form-control" type="text" name="name" id="name"  value="">
	</div>
	<div class="form-group row">
		<label for="category_id" class="form-label">
			Tên danh mục
		</label>
		<select class="form-control" name="category_id" id="category_id" >
			<?php 
		//	$sql = "select id, name from categories";
		//	$c_rows = Query($sql);
			
			$c_rows = $data['category'];
			while($c_row = mysqli_fetch_array($c_rows))
			{
				?>
				<option value="<?php echo $c_row['id']?>">
					<?php echo $c_row['name'];?>
				</option>
				<?php 
			}
			?>
		</select>
	</div>
	<div class="form-group row">
		<label for="style_id" class="form-label">
			Kiểu
		</label>
		<select class="form-control" name="style_id" id="style_id" >
			<?php 
		//	$sql = "select id, name from styles";
		//	$s_rows = Query($sql);
			$s_rows = $data['style'];
			while($s_row = mysqli_fetch_array($s_rows))
			{
				?>
				<option value="<?php echo $s_row['id']?>">
					<?php echo $s_row['name'];?>
				</option>
				<?php 
			}
			?>
		</select>
	</div>
	<div class="form-group row">
		<label for="size" class="form-label">
			Cỡ
		</label>
		<input class="form-control" type="text" name="size" id="size"  value="">
	</div>
	<div class="form-group row">
		<label for="weight" class="form-label">
			Trọng lượng
		</label>
		<input class="form-control" type="text" name="weight" id="weight"  value="">
	</div>
	<div class="form-group row">
		<label for="partner_id" class="form-label">
			Hãng sản xuất
		</label>
		<select class="form-control" name="partner_id" id="partner_id" >
			<?php 
		//	$sql = "select id, name from partners";
		//	$p_rows = Query($sql);
			$p_rows = $data['partner'];
			while($p_row = mysqli_fetch_array($p_rows))
			{
				?>
				<option value="<?php echo $p_row['id']?>">
					<?php echo $p_row['name'];?>
				</option>
				<?php 
			}
			?>
		</select>
	</div>
	<div class="form-group row">
		<label for="price" class="form-label">
			Giá mới
		</label>
		<input class="form-control" type="text" name="price" id="price"  value="">
	</div>
	<div class="form-group row">
		<label for="old_price" class="form-label">
			Giá cũ
		</label>
		<input class="form-control" type="text" name="old_price" id="old_price"  value="">
	</div>
	<div class="form-group row">
		<label for="photo" class="form-label">
			Ảnh
		</label>
		<input class="form-control" type="file" name="photo" id="photo"  value="">
	</div>
	<div class="form-group row">
		<label for="description" class="form-label">
			Mô tả
		</label>
		<textarea class="form-control" name="description" id="description" ></textarea>
	</div>
	<div class="form-group row">
		
		<input class="form-control" type="submit" value="Thêm">
		<input class="form-control" type="reset" value="Nhập lại">
	</div>
</form>
</div>
