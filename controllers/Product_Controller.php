<?php
	include_once('models/Product_Model.php');
	include_once('models/Category_Model.php');
	include_once('models/Style_Model.php');
	include_once('models/Partner_Model.php');
	
	include_once('controllers/Controller.php');


	class Product_Controller extends Controller{


		public function index($id = 0){
			$model = new Product_Model();
			$data['products'] = $model->getAllWithJoins();

			return $this->view('views.product.list', $data);	

		}

		public function new($id = 0){
			$categoryModel = new Category_Model();
			$data['category'] = $categoryModel->getAll();
			
			$styleModel = new Style_Model();
			$data['style'] = $styleModel->getAll();
			
			$partnerModel = new Partner_Model();
			$data['partner'] = $partnerModel->getAll();

			return $this->view('views.product.new', $data);

		}


		public function insert($id = 0){
			$name = $_POST['name'];
			$category_id = $_POST['category_id'];
			$style_id = $_POST['style_id'];
			$size = $_POST['size'];
			$weight = $_POST['weight'];
			$price = $_POST['price'];
			$old_price = $_POST['old_price'];
			$description = $_POST['description'];
			$partner_id = $_POST['partner_id'];

			$fields = array('name', 'category_id', 'style_id', 'size', 'weight', 'price', 'old_price', 'description', 'partner_id');

			$values = array( $name,  $category_id,  $style_id,  $size,  $weight,  $price,  $old_price,  $description,  $partner_id);
			
			$productModel = new Product_Model();

			$id = $productModel ->insert($fields, $values);

			if(isset($_FILES['photo']['name']))
			{
				move_uploaded_file($_FILES['photo']['tmp_name'], "uploads/$id.jpg");
			}

			$this->index();

		}
		public function edit($id){
			
			$categoryModel = new Category_Model();
			$data['category'] = $categoryModel->getAll();
			
			$styleModel = new Style_Model();
			$data['style'] = $styleModel->getAll();
			
			$partnerModel = new Partner_Model();
			$data['partner'] = $partnerModel->getAll();

			$productModel = new Product_Model();
			$data['product'] = $productModel->getOne($id);


			return $this->view('views.product.edit', $data);


		}
		public function update($id){
			$name = $_POST['name'];
			$category_id = $_POST['category_id'];
			$style_id = $_POST['style_id'];
			$size = $_POST['size'];
			$weight = $_POST['weight'];
			$price = $_POST['price'];
			$old_price = $_POST['old_price'];
			$description = $_POST['description'];
			$partner_id = $_POST['partner_id'];

			$fields = array('name', 'category_id', 'style_id', 'size', 'weight', 'price', 'old_price', 'description', 'partner_id');

			$values = array( $name,  $category_id,  $style_id,  $size,  $weight,  $price,  $old_price,  $description,  $partner_id);
			
			$productModel = new Product_Model();

			$productModel ->update($id, $fields, $values);

			if(isset($_FILES['photo']['name']))
			{
				move_uploaded_file($_FILES['photo']['tmp_name'], "uploads/$id.jpg");
			}

			$this->index();
			
		}
		public function delete($id){
			$productModel = new Product_Model();
			$productModel->delete($id);

			//Xử lý upload file

			if(file_exists("uploads/$id.jpg"))
			{
				unlink("uploads/$id.jpg");
			}

			$this->index();
			
		}


	}


?>