<?php
include_once('Database.php');

class Product_Model extends Database{

	public function __construct(){
		$this->table_name = 'products';//
		parent::__construct();
	}
	
	public function getAllWithJoins(){
		$sql = "select p.*, c.name as c_name, s.name as s_name, pa.name as pa_name from products p
		inner join categories c on p.category_id = c.id
		inner join styles s on p.style_id = s.id
		inner join partners pa on p.partner_id = pa.id
		";

		$result = mysqli_query(self::$conn, $sql);
		return $result;
	}

}

?>