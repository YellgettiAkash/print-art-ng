<?php
include('subcategory.php');

$types_of_print = [
	"photo_photo" => [
		"id" => "paper_photo",
		"name" => "Paper Photo",
		"active" => true,
		"category" => $photo_photo_steps
	],
	"canvas_photo" => [
		"id" => "canvas_photo",
		"name" => "Canvas Photo",
		"category" => $canvas_photo
	],
	"canvas_min_photo" => [
		"id" => "canvas_min_photo",
		"name" => "Canvas Mini ",
		"category" => $canvas_min_photo
	],
	

	"mdf_photo" => [
		"id" => "mdf_photo",
		"name" => "MDF Photo",
		"category" => $mdf_photo_steps
	],
	
	"acrylic_photo" => [
		"id" => "acrylic_photo",
		"name" => "Acrylic ",
		"category" =>$acrylic_photo
	],
	
	"acrylic_block_photo" => [
		"id" => "acrylic_block_photo",
		"name" => "Acrylic Block ",
		"category" =>$acrylic_block_photo
	],

];
// header("content-type : application/json");
echo  json_encode($types_of_print);
// echo "<pre>".print_r($types_of_print,true);