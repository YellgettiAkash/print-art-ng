<?php
ini_set('display_errors',1);

if(isset($_REQUEST['category'])){
	$array = json_decode(file_get_contents('app/data.json'),true);
	$category =$_REQUEST['category'];
	include 'edit-price.php';
	// echo json_encode($array[]);
}