<?php 
	
	session_start();


	if(isset($_GET['module']))
		$module = $_GET['module'];
	else
		$module = "product";

	if(isset($_GET['action']))
		$action = $_GET['action'];
	else
		$action = "index";

	if(isset($_GET['id']))
		$id = $_GET['id'];
	else
		$id = 0;



	if(isset($_SESSION['username']) && $_SESSION['username']=='admin' )
	{
		$module = ucfirst($module);
		$className = $module."_Controller";

		include_once("controllers/$className.php");

		$controller = new $className();

		echo $controller->$action($id);

	} else
		header('Location: login.php');

?>