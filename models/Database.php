<?php
	require_once('inc/config.php');

	class Database{
		public static $conn;
		protected $table_name;  

		function __construct(){
			self::$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD) or die ('Lỗi kết nối');
			mysqli_select_db(self::$conn, DB_NAME);
		} 

		//Lấy tất cả các bản ghi
		public function getAll(){
			$sql = "select * from {$this->table_name}";
			$result = mysqli_query(self::$conn, $sql);
			return $result;
		}

		//Lấy một bản ghi theo $id
		public function getOne($id){
			$sql = "select * from {$this->table_name} where id = $id";
			$result = mysqli_query(self::$conn, $sql);
			return $result;
		}

		//Tìm kiếm các bản ghi theo điều kiện $condition
		public function search($condition){
			$sql = "select * from {$this->table_name} where $condition";
			$result = mysqli_query(self::$conn, $sql);
			return $result;
		}


		//Thêm một bản ghi mới
		public function insert($fields, $values){

			$str_field = implode(", ", $fields); 
			$str_value = implode("', '", $values);	

			$sql = "insert into {$this->table_name} ($str_field) values ('$str_value')";
			
			mysqli_query(self::$conn, $sql);

			$id  = mysqli_insert_id(self::$conn);

			return $id;
		}


		//Cập nhật bản ghi
		public function update($id, $fields, $values){
			
			$arr = array();
			for($i = 0; $i < count($fields); $i++ )
				$arr[] = "{$fields[$i]} = '{$values[$i]}'";

			$str = implode(', ', $arr);

			$sql = "update {$this->table_name} set $str where id = $id";
			mysqli_query(self::$conn, $sql);
		}

		//Xoá bản ghi
		public function delete($id){
			$sql = "Delete from {$this->table_name} where id = $id";
			mysqli_query(self::$conn, $sql);
		}

	}


?>