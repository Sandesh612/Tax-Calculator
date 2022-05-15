<?php
session_start();
ini_set('display_errors', 1);
Class Action {
	private $db;

	public function __construct() {
		ob_start();
   	include 'db_connect.php';
    
    $this->db = $conn;
	}
	function __destruct() {
	    $this->db->close();
	    ob_end_flush();
	}

	function login(){
		extract($_POST);
			$qry = $this->db->query("SELECT * FROM users where username = '".$username."' and password = '".md5($password)."' ");
		if($qry->num_rows > 0){
			foreach ($qry->fetch_array() as $key => $value) {
				if($key != 'password' && !is_numeric($key))
					$_SESSION['login_'.$key] = $value;
			}
				return 1;
		}else{
			return 3;
		}
	}
	function logout(){
		session_destroy();
		foreach ($_SESSION as $key => $value) {
			unset($_SESSION[$key]);
		}
		header("location:login.php");
	}
	
	function save_category(){
		extract($_POST);
		$data = "";
		foreach($_POST as $k => $v){
			if(!in_array($k, array('id')) && !is_numeric($k)){
				if(empty($data)){
					$data .= " $k='$v' ";
				}else{
					$data .= ", $k='$v' ";
				}
			}
		}
		if(empty($id)){
			$save = $this->db->query("INSERT INTO category_list set $data");
		}else{
			$save = $this->db->query("UPDATE category_list set $data where id = $id");
		}
		if($save){
			return 1;
		}
	}
	function delete_category(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM category_list where id = $id");
		if($delete){
			return 1;
		}
	}
	function save_image(){
		extract($_FILES['file']);
		if(!empty($tmp_name)){
			$fname = strtotime(date("Y-m-d H:i"))."_".(str_replace(" ","-",$name));
			$move = move_uploaded_file($tmp_name,'../assets/uploads/content_images/'. $fname);
			$protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https'?'https':'http';
			$hostName = $_SERVER['HTTP_HOST'];
			$path =explode('/',$_SERVER['PHP_SELF']);
			$currentPath = '/'.$path[1]; 
			if($move){
				return $protocol.'://'.$hostName.$currentPath.'/assets/uploads/content_images/'.$fname;
			}
		}
	}
	function save_post(){
		extract($_POST);
		$data = "";
		foreach($_POST as $k => $v){
			if(!in_array($k, array('id','content','status','date_published')) && !is_numeric($k)){
				if(empty($data)){
					$data .= " $k='$v' ";
				}else{
					$data .= ", $k='$v' ";
				}
			}
		}

		if(isset($status) && $status == 'on'){
					$data .= ", status=1 ";
					if(empty($date_published))
						$data .= ", date_published=now() ";
					else
						$data .= ", date_published='$date_published' ";
		}else{
					$data .= ", status=0 ";
		}
		$data .= ", content = '".htmlentities(str_replace("'","&#x2019;",$content))."' ";
		if(!empty($_FILES['cover']['tmp_name'])){
			$fname = strtotime(date("Y-m-d H:i"))."_".(str_replace(" ","-",$_FILES['cover']['name']));
			$move = move_uploaded_file($_FILES['cover']['tmp_name'],'../assets/uploads/content_images/'. $fname);
			$protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https'?'https':'http';
			$hostName = $_SERVER['HTTP_HOST'];
			$path =explode('/',$_SERVER['PHP_SELF']);
			$currentPath = '/'.$path[1]; 
			if($move){
						$data .= ", cover_img='$fname' ";
			}
		}
		if(empty($id)){
			$save = $this->db->query("INSERT INTO post_list set $data");
		}else{
			$save = $this->db->query("UPDATE post_list set $data where id = $id");
		}
		if($save){
			return 1;
		}
	}
	function delete_post(){
		extract($_POST);
		$delete = $this->db->query("DELETE FROM post_list where id = $id");
		if($delete){
			return 1;
		}
	}
	function save_about(){
		extract($_POST);
		// if()
		if(!empty($content)){
			$save = file_put_contents('../about.html', $content);
			if($save)
				return 1;
		}else{
			$fh = fopen('../about.html', 'w' );
			fclose($fh);
				return 1;
		}
	}
}