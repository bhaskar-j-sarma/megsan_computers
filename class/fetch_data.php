<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'pc_store');
class fetch_data
	{
 		function __construct()
 		{ 
			$db = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
			$this->dbh=$db;
			if (!$db) {
				die("Connection failed: ".$db->connect_error);
			}
			
 		}
 		public function all_categories()
 		{
			 $sql = "select * from blogs where approvel = 1";
			 $result = $this->dbh->query($sql);
 		
 			return $result;
 		}

 		public function all_product_image_list(){
 			$result=mysqli_query($this->dbh,"SELECT * FROM products, image WHERE products.id = image.product_id");
 			return $result;
 		}

 		public function selected_categories_products($url){
 			$result=mysqli_query($this->dbh,"SELECT products.product_name, products.tbumb_image, products.price, products.brand_name, products.approvel, products.url FROM products, blogs WHERE blogs.title = products.category_name AND blogs.url = '$url'");
 			return $result;
 		}

 		public function selected_products($url){
 			$result=mysqli_query($this->dbh,"SELECT * FROM products WHERE url = '$url'");
 			return $result;
 		}

 		public function selected_products_images($url){
 			$result=mysqli_query($this->dbh,"SELECT image.image FROM products, image WHERE products.id = image.product_id AND products.url = '$url'");
 			return $result;
 		}

 		public function top_review(){
 			$result=mysqli_query($this->dbh,"SELECT * FROM review ORDER BY id DESC LIMIT 4");
 			return $result;
 		}

 		public function review_list(){
 			$result=mysqli_query($this->dbh,"SELECT * FROM review ORDER BY id DESC");
 			return $result;
 		}

 		public function slider_list(){
 			$result=mysqli_query($this->dbh,"SELECT * FROM slider");
 			return $result;
 		}
	}
?>