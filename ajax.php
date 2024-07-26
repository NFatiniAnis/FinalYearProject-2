<?php
ob_start();
$action = $_GET['action'];
include('admin/db_connect.php');
$crud = new Action();
if($action == "save_application"){
	$save = $crud->save_application();
	if($save)
		echo $save;
}
if($action == "delete_application"){
	$delete = $crud->delete_application();
	if($delete)
		echo $delete;
}
ob_end_flush();
?>