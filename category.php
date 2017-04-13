<?php
include('subcategory.php');

$types_of_print = [
	"photo_photo" => [
		"id" => "paper_photo",
		"name" => "Paper Photo",
		"price" => 2,
		"active" => true,
		"category" => $photo_photo_steps
	],
	"canvas_photo" => [
		"id" => "canvas_photo",
		"name" => "Canvas Photo",
		"price" => 4,
		"category" => $canvas_photo
	],
	"canvas_min_photo" => [
		"id" => "canvas_min_photo",
		"name" => "Canvas Mini ",
		"price" => 5,
		"category" => $canvas_min_photo
	],
	

	"mdf_photo" => [
		"id" => "mdf_photo",
		"name" => "MDF Photo",
		"price" => 3,
		"category" => $mdf_photo_steps
	],
	
	"acrylic_photo" => [
		"id" => "acrylic_photo",
		"name" => "Acrylic ",
		"price" => 6,
		"category" =>$acrylic_photo
	],
	
	"acrylic_block_photo" => [
		"id" => "acrylic_block_photo",
		"name" => "Acrylic Block ",
		"price" => 5,
		"category" =>$acrylic_block_photo
	],

];
// header("content-type : application/json");
echo  json_encode($types_of_print);
// echo "<pre>".print_r($types_of_print,true);