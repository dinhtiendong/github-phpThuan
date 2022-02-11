
<?php
	session_start();
	
	if(isset($_POST['username']))
		$username = $_POST['username'];
	else
		$username = "";

	if(isset($_POST['password']))
		$password = $_POST['password'];
	else
		$password = "";

	if(isset($_GET['action']))
		$action = $_GET['action'];
	else
		$action = "";

	//Login successfully
	if($username=='admin' && $password=='123456')
	{
		$_SESSION['username'] = 'admin';
		header("Location: index.php?module=product");
	}

	//Logout
	if($action=='logout')
		unset($_SESSION['username']);		


	include_once('./views/templates/_header.php');
?>

<div class="container">

<h3>ĐĂNG NHẬP</h3>

<form action="login.php" method="POST">
	<div class="form-group row">
		<label for="username" class="form-label">
			Tên đăng nhập
		</label>
		<input class="form-control" type="text" name="username" id="username"  value="<?php echo $username;?>">
	</div>
	
	<div class="form-group row">
		<label for="password" class="form-label">
			Mật khẩu
		</label>
		<input class="form-control" type="password" name="password" id="password"  value="">
	</div>

	<div class="form-group row">	
		<input class="form-control" type="submit" value="Đăng nhập">
		<input class="form-control" type="reset" value="Nhập lại">
	</div>

</form>
</div>
<?php
	include_once('./views/templates/_footer.php');
?>