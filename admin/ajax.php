<?php
ob_start();
date_default_timezone_set("Asia/Manila");

$action = $_GET['action'];
include 'admin_class.php';
$crud = new Action();
if ($action == 'login') {
	$login = $crud->login();
	if ($login)
		echo $login;
}
if ($action == 'logout') {
	$logout = $crud->logout();
	if ($logout)
		echo $logout;
}

if ($action == 'save_category') {
	$save = $crud->save_category();
	if ($save)
		echo $save;
}
if ($action == 'delete_category') {
	$delete = $crud->delete_category();
	if ($delete)
		echo $delete;
}
if ($action == 'save_image') {
	$save = $crud->save_image();
	if ($save)
		echo $save;
}
if ($action == 'save_post') {
	$save = $crud->save_post();
	if($save)
		echo $save;
}
if ($action == 'delete_post') {
	$delete = $crud->delete_post();
	if($delete)
		echo $delete;
}
ob_end_flush();
