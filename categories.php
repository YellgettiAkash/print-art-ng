<?php

$photo_photo_steps =[
    ["id" => "paper_type", "name" => "Paper Type ", "active" => true,  "subcategory" => [
        ["id" => "information", "name" => "information", "active" => true, "categories" => [
            ["id" => "glossy", "active" => true,"name" => "Glossy", "price" => 1 ],
            ["id" => "mats", "name" => "Mat", "price" => 2],
            ["id" => "mat_hq", "name" => "Mat-HQ", "price" => 3]
        ]]
    ], ],
    ["id" => "frame", "name" => "Frame Photo", "subcategory" => [
        ["id" => "none", "name" => "none",   "categories" => []],
        ["id" => "classic", "name" => "classic", "categories" => [
            ['id' => 'corner_1', 'name' => 'classic_1', 'price' => 10,],
            ['id' => 'corner_2', 'name' => 'classic_2', 'price' => 15, ],
            ['id' => 'corner_3', 'name' => 'classic_3', 'price' => 10, ],
        ]],
        ["id" => "color", "name" => "color", "categories" => [
            ['id' => 'grey', 'name' => 'frame1', 'price' => 10, ],
            ['id' => 'red', 'name' => 'frame2', 'price' => 15, ],
            ['id' => 'blue', 'name' => 'frame3', 'price' => 10, ]
        ]],
    ], ],
    ["id" => "print_size", "name" => "Print Size", "subcategory" => [
        ["id" => "information", "name" => "information",  "categories" => [
            ['name' => '5"x3.7"', 'id' => '5-7', 'height' => 5,'width' => 3.7,  'price' => 0,   ],
            ['name' => '7"x5.2"', 'id' => '7-2', 'height' => 7,'width' => 5.2,'price' => 0, ],
            ['name' => '9"x6.7"', 'id' => '9-7', 'height' => 9,'width' => 6.7,'price' => 0, ],
            ['name' => '11"x8.2"', 'id' => '11-8.2"', 'height' => 11,'width' => 8.2, 'price' => 0, ],
        ]],
    ], ],
    ["id" => "mat", "name" => "Mat", "subcategory" => [
        ["id" => "none", "name" => "none", "categories" => []],
        ["id" => "color", "name" => "color",  "categories" => [
            ['id' => 'grey', 'name' => 'frame1', 'price' => 10,  ],
            ['id' => 'red', 'name' => 'frame2', 'price' => 15, ],
            ['id' => 'blue', 'name' => 'frame3', 'price' => 10, ]
        ]],
    ], ]
];


$mdf_photo_steps =[
    ["id" => "paper_type", "name" => "Paper Type ",  "subcategory" => [
        ["id" => "information", "name" => "information",  "categories" => [
            ["id" => "glossy", "name" => "Glossy", "price" => 1 ],
            ["id" => "mats", "name" => "Mat", "price" => 2],
            ["id" => "mat_hq", "name" => "Mat-HQ", "price" => 3]
        ]]
    ], ],
    ["id" => "print_size", "name" => "Print Size", "subcategory" => [
        ["id" => "information", "name" => "information",  "categories" => [
            ['name' => '5"x3.7"', 'id' => '5-7', 'price' => 0],
            ['name' => '7"x5.2"', 'id' => '7-2', 'price' => 0, ],
            ['name' => '9"x6.7"', 'id' => '9-7', 'price' => 0, ],
            ['name' => '11"x8.2"', 'id' => '11-8.2"', 'price' => 0, ],
        ]],
    ], ],
    
];

?>