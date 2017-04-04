<?php

$steps =[
    ["id" => "paper_type", "name" => "Paper Type ", "active" => true, "category" => [
        ["id" => "information", "name" => "information", "active" => true, "categories" => [
            ["id" => "glossy", "name" => "Glossy", "price" => 1, "active" => true],
            ["id" => "mats", "name" => "Mat", "price" => 2],
            ["id" => "mat_hq", "name" => "Mat-HQ", "price" => 3]
        ]]
    ], ],
    ["id" => "frame", "name" => "Frame Photo", "category" => [
        ["id" => "none", "name" => "none", "active" => true, "categories" => []],
        ["id" => "classic", "name" => "classic", "categories" => [
            ['id' => 'assets/images/corner/corner_1.png', 'name' => 'frame1', 'price' => 10, ],
            ['id' => 'assets/images/corner/corner_2.png', 'name' => 'frame2', 'price' => 15, ],
            ['id' => 'assets/images/corner/corner_3.png', 'name' => 'frame3', 'price' => 10, ],
        ]],
        ["id" => "color", "name" => "color", "categories" => [
            ['id' => 'grey', 'name' => 'frame1', 'price' => 10, ],
            ['id' => 'red', 'name' => 'frame2', 'price' => 15, ],
            ['id' => 'blue', 'name' => 'frame3', 'price' => 10, ]
        ]],
    ], ],
    ["id" => "print_size", "name" => "Print Size", "category" => [
        ["id" => "information", "name" => "information", "active" => true, "categories" => [
            ['name' => '5"x3.7"', 'id' => '5-7', 'price' => 0, 'active' => true, ],
            ['name' => '7"x5.2"', 'id' => '7-2', 'price' => 0, ],
            ['name' => '9"x6.7"', 'id' => '9-7', 'price' => 0, ],
            ['name' => '11"x8.2"', 'id' => '11-8.2"', 'price' => 0, ],
        ]],
    ], ],
    ["id" => "mat", "name" => "Mat", "category" => [
        ["id" => "none", "name" => "none", "active" => true, "categories" => []],
        ["id" => "color", "name" => "color", "categories" => [
            ['id' => 'grey', 'name' => 'frame1', 'price' => 10, "active" => true, ],
            ['id' => 'red', 'name' => 'frame2', 'price' => 15, ],
            ['id' => 'blue', 'name' => 'frame3', 'price' => 10, ]
        ]],
    ], ]
];