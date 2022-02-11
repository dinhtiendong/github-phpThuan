<?php
include_once('Database.php');

class Style_Model extends Database{

	public function __construct(){
		$this->table_name = 'styles';//
		parent::__construct();
	}
	

}

?>