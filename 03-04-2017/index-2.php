<?php

$types_of_print = [
	"photo_photo" => [
		"id" => "photo_photo",
		"name" => "Photo Photo",
		"steps" => ["print_type","print_size","frame","mat"]
	],
	"mdf_photo" => [
		"id" => "mdf_photo",
		"name" => "MDF Photo",
		"steps" => ["print_size","mdf_color"]
	],
	"canvas_photo" => [
		"id" => "canvas_photo",
		"name" => "Canvas Photo",
		"steps" => ["canvas_type","print_size","frame","wrap"]
	],
	"canvas_min_photo" => [
		"id" => "canvas_min_photo",
		"name" => "Canvas Mini ",
		"steps" => ["print_size","direction"]
	],
	"acrylic_photo" => [
		"id" => "acrylic_photo",
		"name" => "Acrylic ",
		"steps" => ["print_size","hanging"]
	],
	"acrylic_block_photo" => [
		"id" => "acrylic_block_photo",
		"name" => "Acrylic Block ",
		"steps" => ["print_size","direction"]
	],

];

echo  json_encode($types_of_print);
// echo "<pre>".print_r($types_of_print,true);