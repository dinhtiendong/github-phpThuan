<?php
include_once('Database.php');

class Partner_Model extends Database{

	public function __construct(){
		$this->table_name = 'partners';//
		parent::__construct();
	}
	

}

?>