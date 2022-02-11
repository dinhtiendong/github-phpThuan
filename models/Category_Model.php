<?php
include_once('Database.php');

class Category_Model extends Database{

	public function __construct(){
		$this->table_name = 'categories';//
		parent::__construct();
	}
	

}

?>