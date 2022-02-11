<?php
	abstract class Controller{

		public function view($viewName, $data)
		{
			include_once('views/templates/_header.php');

			$arr = explode('.', $viewName);
			$fileName = implode('/', $arr);
			$fileName .= ".php";
			include_once($fileName);

			include_once('views/templates/_footer.php');

		}

		public function index($id){
			
		}
		public function new($id){
			
		}
		public function insert($id){
			
		}
		public function edit($id){
			
		}
		public function update($id){
			
		}
		public function delete($id){
			
		} 
	}
?>