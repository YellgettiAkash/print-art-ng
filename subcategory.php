<?php

$photo_photo_steps =[
    ["id" => "paper_type", "name" => "Paper Type ", "active" => true,  "subcategory" => [
        ["id" => "information", "name" => "information", "active" => true, "categories" => [
            ["id" => "glossy", "active" => true,"name" => "Glossy", "price" => 1 ],
            ["id" => "mats", "name" => "Mat", "price" => 2],
            ["id" => "mat_hq", "name" => "Mat-HQ", "price" => 3]
        ]]
    ], ],
    ["id" => "frame", "name" => "Frame Photo", 
    "subcategories" => [
          [
            "id" => "mdf-frame", "name" => "MDF Frame", "price" => 5
          ],
          [
            "id" => "wooden-frame", "name" => "Wooden Frame", "price" => 5
          ],
        ],
    "subcategory" => [
        ["id" => "none", "name" => "none",   "categories" => []],
        ["id" => "classic", "name" => "classic", "categories" => [
            [
        'id' => 'assets/images/corner/corner_1.png',
        'name' => 'frame1',
        'price' => 10,
        'class' => 'frame_style_1'
      ],
     [
        'id' => 'assets/images/corner/corner_2.png',
        'name' => 'frame2',
        'price' => 15,
        'class' => 'frame_style_2',
      ],
     [
        'id' => 'assets/images/corner/corner_3.png',
        'name' => 'frame3',
        'price' => 10,
        'class' => 'frame_style_3'
      ],
     [
        'id' => 'assets/images/corner/corner_4.png',
        'name' => 'frame1',
        'price' => 10,
        'class' => 'frame_style_4'
      ],
     [
        'id' => 'assets/images/corner/corner_5.png',
        'name' => 'frame2',
        'price' => 15,
        'class' => 'frame_style_5'
      ],
     [
        'id' => 'assets/images/corner/corner_6.png',
        'name' => 'frame3',
        'price' => 10,
        'class' => 'frame_style_6'
      ],
     [
        'id' => 'assets/images/corner/corner_7.png',
        'name' => 'frame1',
        'price' => 10,
        'class' => 'frame_style_7'
      ],
     [
        'id' => 'assets/images/corner/corner_8.png',
        'name' => 'frame2',
        'price' => 15,
        'class' => 'frame_style_9'
      ],
     [
        'id' => 'assets/images/corner/corner_9.png',
        'name' => 'frame3',
        'price' => 10,
        'class' => 'frame_style_10'
      ],
     [
        'id' => 'assets/images/corner/corner_10.png',
        'name' => 'frame1',
        'price' => 10,
      ],
      [
        'id' => 'assets/images/corner/corner_11.png',
        'name' => 'frame2',
        'price' => 15,
      ],
      [
        'id' => 'assets/images/corner/corner_12.png',
        'name' => 'frame3',
        'price' => 10,
      ]    
       ] ],
        ["id" => "color", "name" => "color", "categories" => [
            
            ['id' => 'black','class' => 'black_frame', 'name' => 'black', 'price' => 10, ],
            ['id' => 'blue','class' => 'blue_frame', 'name' => 'blue', 'price' => 15, ],
            ['id' => 'dark_brown','class' => 'dark_brown_frame', 'name' => 'dark_brown', 'price' => 10, ],
            ['id' => 'gold','class' => 'gold_frame', 'name' => 'frame3', 'gold' => 10, ],

            ['id' => 'green','class' => 'green_frame', 'name' => 'green', 'price' => 10, ],
            ['id' => 'grey','class' => 'grey_frame', 'name' => 'grey', 'price' => 15, ],
            ['id' => 'honey_brown','class' => 'honey_brown_frame', 'name' => 'honey_brown', 'price' => 10, ],
            ['id' => 'ivory','class' => 'ivory_frame', 'name' => 'ivory', 'price' => 10, ],

            ['id' => 'purple','class' => 'purple_frame', 'name' => 'purple', 'price' => 10, ],
            ['id' => 'red','class' => 'red_frame', 'name' => 'red', 'price' => 15, ],
            ['id' => 'silver','class' => 'silver_frame', 'name' => 'silver', 'price' => 10, ],
            ['id' => 'white','class' => 'white_frame', 'name' => 'white', 'price' => 10, ]

          ]
        ],
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
            ['id' => 'black','class' => 'black_mat', 'name' => 'black', 'price' => 10, ],
            ['id' => 'blue','class' => 'blue_mat', 'name' => 'blue', 'price' => 15, ],
            ['id' => 'dark_brown','class' => 'dark_brown_mat', 'name' => 'dark_brown', 'price' => 10, ],
            ['id' => 'gold','class' => 'gold_mat', 'name' => 'frame3', 'gold' => 10, ],

            ['id' => 'green','class' => 'green_mat', 'name' => 'green', 'price' => 10, ],
            ['id' => 'grey','class' => 'grey_mat', 'name' => 'grey', 'price' => 15, ],
            ['id' => 'honey_brown','class' => 'honey_brown_mat', 'name' => 'honey_brown', 'price' => 10, ],
            ['id' => 'ivory','class' => 'ivory_mat', 'name' => 'ivory', 'price' => 10, ],

            ['id' => 'purple','class' => 'purple_mat', 'name' => 'purple', 'price' => 10, ],
            ['id' => 'red','class' => 'red_mat', 'name' => 'red', 'price' => 15, ],
            ['id' => 'silver','class' => 'silver_mat', 'name' => 'silver', 'price' => 10, ],
            ['id' => 'white','class' => 'white_mat', 'name' => 'white', 'price' => 10, ]

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
             ['name' => '5"x3.7"', 'id' => '5-7', 'height' => 5,'width' => 3.7,  'price' => 0,   ],
            ['name' => '7"x5.2"', 'id' => '7-2', 'height' => 7,'width' => 5.2,'price' => 0, ],
            ['name' => '9"x6.7"', 'id' => '9-7', 'height' => 9,'width' => 6.7,'price' => 0, ],
            ['name' => '11"x8.2"', 'id' => '11-8.2"', 'height' => 11,'width' => 8.2, 'price' => 0, ],
     
        ]],
    ], ],
    
];

?>