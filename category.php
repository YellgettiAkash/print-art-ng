<?php
include('subcategory.php');

$types_of_print = [
	"photo_photo" => [
		"id" => "paper_photo",
		"name" => "paper Photo",
		"active" => true,
		"category" => $photo_photo_steps
	],
	"mdf_photo" => [
		"id" => "mdf_photo",
		"name" => "MDF Photo",
		"category" => $mdf_photo_steps
	],
	"canvas_photo" => [
		"id" => "canvas_photo",
		"name" => "Canvas Photo",
		"category" => $photo_photo_steps
	],
	"canvas_min_photo" => [
		"id" => "canvas_min_photo",
		"name" => "Canvas Mini ",
		"category" => $mdf_photo_steps
	],
	"acrylic_photo" => [
		"id" => "acrylic_photo",
		"name" => "Acrylic ",
		"category" =>$mdf_photo_steps
	],
	"acrylic_block_photo" => [
		"id" => "acrylic_block_photo",
		"name" => "Acrylic Block ",
		"category" =>$mdf_photo_steps
	],

];
// header("content-type : application/json");
echo  json_encode($types_of_print);
// echo "<pre>".print_r($types_of_print,true);