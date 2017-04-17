<?php


$photo_photo_steps = [
  ["id" => "paper_type", "name" => "Paper Type ", "active" => true, "subcategory" => [
    ["id" => "information", "name" => "information", "active" => true, "categories" => [
      ["id" => "glossy", "active" => true, "name" => "Glossy", "price" => 1],
      ["id" => "mats", "name" => "Mat", "price" => 2],
      ["id" => "mat_hq", "name" => "Mat-HQ", "price" => 3]
    ]]
  ], ],
  ["id" => "frame", "name" => "Frame Photo",  "subcategory" => [
    ["id" => "none", "name" => "none", "categories" => []],
    ["id" => "classic", "name" => "classic", "categories" => [
      ['id' => 'assets/images/corner/corner_1.png', 'name' => 'frame1', 'price' => 10, 'class' => 'frame_style_1'],
      ['id' => 'assets/images/corner/corner_2.png', 'name' => 'frame2', 'price' => 15, 'class' => 'frame_style_2', ],
      ['id' => 'assets/images/corner/corner_3.png', 'name' => 'frame3', 'price' => 10, 'class' => 'frame_style_3'],
      ['id' => 'assets/images/corner/corner_4.png', 'name' => 'frame1', 'price' => 10, 'class' => 'frame_style_4'],
      ['id' => 'assets/images/corner/corner_10.png', 'name' => 'frame1', 'price' => 10, 'class' => 'frame_style_10'],
      ['id' => 'assets/images/corner/corner_11.png', 'name' => 'frame2', 'price' => 15, 'class' => 'frame_style_11'],
      ['id' => 'assets/images/corner/corner_12.png', 'name' => 'frame3', 'price' => 10, 'class' => 'frame_style_12'],
      ['id' => 'assets/images/corner/corner_7.png', 'name' => 'frame1', 'price' => 10, 'class' => 'frame_style_7'],
      ['id' => 'assets/images/corner/corner_5.png', 'name' => 'frame2', 'price' => 15, 'class' => 'frame_style_5'],
      ['id' => 'assets/images/corner/corner_8.png', 'name' => 'frame2', 'price' => 15, 'class' => 'frame_style_8'],
      ['id' => 'assets/images/corner/corner_6.png', 'name' => 'frame3', 'price' => 10, 'class' => 'frame_style_6'],
      ['id' => 'assets/images/corner/corner_9.png', 'name' => 'frame3', 'price' => 10, 'class' => 'frame_style_9'],
    ],
    "subcategories" => [
    ["id" => "mdf-frame", "name" => "MDF Frame", "price" => 5],
    ["id" => "wooden-frame", "name" => "Wooden Frame", "price" => 5],
  ],
    ],
    ["id" => "color", "name" => "color", "categories" => [
      ['id' => 'black', 'class' => 'black_frame', 'name' => 'black', 'price' => 10, ],
      ['id' => 'blue', 'class' => 'blue_frame', 'name' => 'blue', 'price' => 15, ],
      ['id' => 'dark_brown', 'class' => 'dark_brown_frame', 'name' => 'dark_brown', 'price' => 10, ],
      ['id' => 'gold', 'class' => 'gold_frame', 'name' => 'frame3', 'price' => 10, ],
      ['id' => 'green', 'class' => 'green_frame', 'name' => 'green', 'price' => 10, ],
      ['id' => 'grey', 'class' => 'grey_frame', 'name' => 'grey', 'price' => 15, ],
      ['id' => 'honey_brown', 'class' => 'honey_brown_frame', 'name' => 'honey_brown', 'price' => 10, ],
      ['id' => 'ivory', 'class' => 'ivory_frame', 'name' => 'ivory', 'price' => 10, ],
      ['id' => 'purple', 'class' => 'purple_frame', 'name' => 'purple', 'price' => 10, ],
      ['id' => 'red', 'class' => 'red_frame', 'name' => 'red', 'price' => 15, ],
      ['id' => 'silver', 'class' => 'silver_frame', 'name' => 'silver', 'price' => 10, ],
      ['id' => 'white', 'class' => 'white_frame', 'name' => 'white', 'price' => 10, ]
    ],
    "subcategories" => [
    ["id" => "mdf-frame", "name" => "MDF Frame", "price" => 5],
    ["id" => "wooden-frame", "name" => "Wooden Frame", "price" => 5],
  ],
  ],
  ], ],
  ["id" => "print_size", "name" => "Print Size", "subcategory" => [
    ["id" => "information", "name" => "information", "categories" => [
      ['name' => '5"x3.7"', 'id' => '5-7', 'height' => 5, 'width' => 3.7, 'price' => 0, ],
      ['name' => '7"x5.2"', 'id' => '7-2', 'height' => 7, 'width' => 5.2, 'price' => 0, ],
      ['name' => '9"x6.7"', 'id' => '9-7', 'height' => 9, 'width' => 6.7, 'price' => 0, ],
      ['name' => '11"x8.2"', 'id' => '11-8.2"', 'height' => 11, 'width' => 8.2, 'price' => 0, ],
    ]],
  ], ],
  ["id" => "mat", "name" => "Mat", "subcategory" => [
    ["id" => "none", "name" => "none", "categories" => []],
    ["id" => "archivable", "name" => "Archivable", "categories" => [
      ['id' => 'black', 'class' => 'black_mat', 'name' => 'black', 'price' => 10, ],
      ['id' => 'blue', 'class' => 'blue_mat', 'name' => 'blue', 'price' => 15, ],
      ['id' => 'dark_brown', 'class' => 'dark_brown_mat', 'name' => 'dark_brown', 'price' => 10, ],
      ['id' => 'gold', 'class' => 'gold_mat', 'name' => 'frame3', 'price' => 10, ],
      ['id' => 'green', 'class' => 'green_mat', 'name' => 'green', 'price' => 10, ],
      ['id' => 'grey', 'class' => 'grey_mat', 'name' => 'grey', 'price' => 15, ],
      ['id' => 'honey_brown', 'class' => 'honey_brown_mat', 'name' => 'honey_brown', 'price' => 10, ],
      ['id' => 'ivory', 'class' => 'ivory_mat', 'name' => 'ivory', 'price' => 10, ],
      ['id' => 'purple', 'class' => 'purple_mat', 'name' => 'purple', 'price' => 10, ],
      ['id' => 'red', 'class' => 'red_mat', 'name' => 'red', 'price' => 15, ],
      ['id' => 'silver', 'class' => 'silver_mat', 'name' => 'silver', 'price' => 10, ],
      ['id' => 'white', 'class' => 'white_mat', 'name' => 'white', 'price' => 10, ]
    ],
     "subcategories" => [
    ['name' => '1"x1"', 'id' => 'mat_1_1', 'height' => 1, 'width' => 1, 'price' => 2, ],
    ['name' => '3"x3"', 'id' => 'mat_3_3', 'height' => 3, 'width' => 3, 'price' => 3, ],
    ['name' => '5"x5"', 'id' => 'mat_5_5', 'height' => 5, 'width' => 5, 'price' => 5, ],
    ['name' => '7"x7"', 'id' => 'mat_7_7', 'height' => 7, 'width' => 7, 'price' => 7, ],
  ],
    ],
    ["id" => "regular", "name" => "Regular", "categories" => [
      ['id' => 'black', 'class' => 'black_mat', 'name' => 'Black', 'price' => 10, ],
      ['id' => 'blue', 'class' => 'blue_mat', 'name' => 'Blue', 'price' => 15, ],
      ['id' => 'dark_brown', 'class' => 'dark_brown_mat', 'name' => 'Dark Brown', 'price' => 10, ],
      ['id' => 'gold', 'class' => 'gold_mat', 'name' => 'Gold', 'price' => 10, ],
      ['id' => 'green', 'class' => 'green_mat', 'name' => 'Green', 'price' => 10, ],
      ['id' => 'grey', 'class' => 'grey_mat', 'name' => 'Grey', 'price' => 15, ],
      ['id' => 'honey_brown', 'class' => 'honey_brown_mat', 'name' => 'Honey Brown', 'price' => 10, ],
      ['id' => 'ivory', 'class' => 'ivory_mat', 'name' => 'Ivory', 'price' => 10, ],
      ['id' => 'purple', 'class' => 'purple_mat', 'name' => 'Purple', 'price' => 10, ],
      ['id' => 'red', 'class' => 'red_mat', 'name' => 'Red', 'price' => 15, ],
      ['id' => 'silver', 'class' => 'silver_mat', 'name' => 'Silver', 'price' => 10, ],
      ['id' => 'white', 'class' => 'white_mat', 'name' => 'White', 'price' => 10, ]
    ],
     "subcategories" => [
    ['name' => '1"x1"', 'id' => 'mat_1_1', 'height' => 1, 'width' => 1, 'price' => 2, ],
    ['name' => '3"x3"', 'id' => 'mat_3_3', 'height' => 3, 'width' => 3, 'price' => 3, ],
    ['name' => '5"x5"', 'id' => 'mat_5_5', 'height' => 5, 'width' => 5, 'price' => 5, ],
    ['name' => '7"x7"', 'id' => 'mat_7_7', 'height' => 7, 'width' => 7, 'price' => 7, ],
  ],
    ],


  ],



   ]
];

$canvas_photo = [
  ["id" => "canvas_type", "name" => "Canvas Type ", "subcategory" => [
    ["id" => "information", "name" => "information", "categories" => [
      ["id" => "high_quality_canvas", "name" => "High Quality Canvas", "price" => 1],
    ]]
  ], ],
   ["id" => "frame", "name" => "Frame Photo",  "subcategory" => [
    ["id" => "none", "name" => "none", "categories" => []],
    ["id" => "classic", "name" => "classic", "categories" => [
      ['id' => 'assets/images/corner/corner_1.png', 'name' => 'frame1', 'price' => 10, 'class' => 'frame_style_1'],
      ['id' => 'assets/images/corner/corner_2.png', 'name' => 'frame2', 'price' => 15, 'class' => 'frame_style_2', ],
      ['id' => 'assets/images/corner/corner_3.png', 'name' => 'frame3', 'price' => 10, 'class' => 'frame_style_3'],
      ['id' => 'assets/images/corner/corner_4.png', 'name' => 'frame1', 'price' => 10, 'class' => 'frame_style_4'],
      ['id' => 'assets/images/corner/corner_10.png', 'name' => 'frame1', 'price' => 10, 'class' => 'frame_style_10'],
      ['id' => 'assets/images/corner/corner_11.png', 'name' => 'frame2', 'price' => 15, 'class' => 'frame_style_11'],
      ['id' => 'assets/images/corner/corner_12.png', 'name' => 'frame3', 'price' => 10, 'class' => 'frame_style_12'],
      ['id' => 'assets/images/corner/corner_7.png', 'name' => 'frame1', 'price' => 10, 'class' => 'frame_style_7'],
      ['id' => 'assets/images/corner/corner_5.png', 'name' => 'frame2', 'price' => 15, 'class' => 'frame_style_5'],
      ['id' => 'assets/images/corner/corner_8.png', 'name' => 'frame2', 'price' => 15, 'class' => 'frame_style_8'],
      ['id' => 'assets/images/corner/corner_6.png', 'name' => 'frame3', 'price' => 10, 'class' => 'frame_style_6'],
      ['id' => 'assets/images/corner/corner_9.png', 'name' => 'frame3', 'price' => 10, 'class' => 'frame_style_9'],
    ],
    "subcategories" => [
    ["id" => "mdf-frame", "name" => "MDF Frame", "price" => 5],
    ["id" => "wooden-frame", "name" => "Wooden Frame", "price" => 5],
  ],
    ],
    ["id" => "color", "name" => "color", "categories" => [
      ['id' => 'black', 'class' => 'black_frame', 'name' => 'black', 'price' => 10, ],
      ['id' => 'blue', 'class' => 'blue_frame', 'name' => 'blue', 'price' => 15, ],
      ['id' => 'dark_brown', 'class' => 'dark_brown_frame', 'name' => 'dark_brown', 'price' => 10, ],
      ['id' => 'gold', 'class' => 'gold_frame', 'name' => 'frame3', 'price' => 10, ],
      ['id' => 'green', 'class' => 'green_frame', 'name' => 'green', 'price' => 10, ],
      ['id' => 'grey', 'class' => 'grey_frame', 'name' => 'grey', 'price' => 15, ],
      ['id' => 'honey_brown', 'class' => 'honey_brown_frame', 'name' => 'honey_brown', 'price' => 10, ],
      ['id' => 'ivory', 'class' => 'ivory_frame', 'name' => 'ivory', 'price' => 10, ],
      ['id' => 'purple', 'class' => 'purple_frame', 'name' => 'purple', 'price' => 10, ],
      ['id' => 'red', 'class' => 'red_frame', 'name' => 'red', 'price' => 15, ],
      ['id' => 'silver', 'class' => 'silver_frame', 'name' => 'silver', 'price' => 10, ],
      ['id' => 'white', 'class' => 'white_frame', 'name' => 'white', 'price' => 10, ]
    ],
    "subcategories" => [
    ["id" => "mdf-frame", "name" => "MDF Frame", "price" => 5],
    ["id" => "wooden-frame", "name" => "Wooden Frame", "price" => 5],
  ],
  ],
  ], ],
  ["id" => "wrap", "name" => "Wrap ", "subcategory" => [
    ["id" => "information", "name" => "information", "categories" => [
      ["id" => "roll", "name" => "Roll", "price" => 0],
      ["id" => "black", "name" => "Black", "price" => 2],
      ["id" => "gallery", "name" => "Gallery", "price" => 3],
      ["id" => "white", "name" => "White", "price" => 4],
    ]]
  ], ],
  ["id" => "print_size", "name" => "Print Size", "subcategory" => [
    ["id" => "information", "name" => "information", "categories" => [
      ['name' => '5"x3.7"', 'id' => '5-7', 'height' => 5, 'width' => 3.7, 'price' => 0, ],
      ['name' => '7"x5.2"', 'id' => '7-2', 'height' => 7, 'width' => 5.2, 'price' => 0, ],
      ['name' => '9"x6.7"', 'id' => '9-7', 'height' => 9, 'width' => 6.7, 'price' => 0, ],
      ['name' => '11"x8.2"', 'id' => '11-8.2"', 'height' => 11, 'width' => 8.2, 'price' => 0, ],
    ]],
  ], ],
];



$acrylic_photo = [
  ["id" => "hanging", "name" => "Hanging ", "subcategory" => [
    ["id" => "information", "name" => "information", "categories" => [
      ["id" => "none", "name" => "None", "price" => 1],
      ["id" => "4_pins", "name" => "4 Pins", "price" => 2],
      ["id" => "back_hanging", "name" => "Back Hanging", "price" => 3]
    ]]
  ], ],
  ["id" => "print_size", "name" => "Print Size", "subcategory" => [
    ["id" => "information", "name" => "information", "categories" => [
      ['name' => '5"x3.7"', 'id' => '5-7', 'height' => 5, 'width' => 3.7, 'price' => 0, ],
      ['name' => '7"x5.2"', 'id' => '7-2', 'height' => 7, 'width' => 5.2, 'price' => 0, ],
      ['name' => '9"x6.7"', 'id' => '9-7', 'height' => 9, 'width' => 6.7, 'price' => 0, ],
      ['name' => '11"x8.2"', 'id' => '11-8.2"', 'height' => 11, 'width' => 8.2, 'price' => 0, ],
    ]],
  ], ],
];



$mdf_photo_steps = [
  ["id" => "mdf_color", "name" => "MDF Colors", "subcategory" => [
    ["id" => "information", "name" => "information", "categories" => [
      ['id' => 'black', 'class' => 'black_mat', 'name' => 'Black', 'price' => 10, ],
      ['id' => 'blue', 'class' => 'blue_mat', 'name' => 'Blue', 'price' => 15, ],
      ['id' => 'dark_brown', 'class' => 'dark_brown_mat', 'name' => 'Dark Brown', 'price' => 10, ],
      ['id' => 'gold', 'class' => 'gold_mat', 'name' => 'Gold', 'price' => 10, ],
      ['id' => 'green', 'class' => 'green_mat', 'name' => 'Green', 'price' => 10, ],
      ['id' => 'grey', 'class' => 'grey_mat', 'name' => 'Grey', 'price' => 15, ],
      ['id' => 'honey_brown', 'class' => 'honey_brown_mat', 'name' => 'Honey Brown', 'price' => 10, ],
      ['id' => 'ivory', 'class' => 'ivory_mat', 'name' => 'Ivory', 'price' => 10, ],
      ['id' => 'purple', 'class' => 'purple_mat', 'name' => 'Purple', 'price' => 10, ],
      ['id' => 'red', 'class' => 'red_mat', 'name' => 'Red', 'price' => 15, ],
      ['id' => 'silver', 'class' => 'silver_mat', 'name' => 'Silver', 'price' => 10, ],
      ['id' => 'white', 'class' => 'white_mat', 'name' => 'White', 'price' => 10, ]

    ]]
  ], ],
  ["id" => "print_size", "name" => "Print Size", "subcategory" => [
    ["id" => "information", "name" => "information", "categories" => [
      ['name' => '5"x3.7"', 'id' => '5-7', 'height' => 5, 'width' => 3.7, 'price' => 0, ],
      ['name' => '7"x5.2"', 'id' => '7-2', 'height' => 7, 'width' => 5.2, 'price' => 0, ],
      ['name' => '9"x6.7"', 'id' => '9-7', 'height' => 9, 'width' => 6.7, 'price' => 0, ],
      ['name' => '11"x8.2"', 'id' => '11-8.2"', 'height' => 11, 'width' => 8.2, 'price' => 0, ],
    ]],
  ], ],
];

$canvas_min_photo = [
  ["id" => "direction", "name" => "Direction", "subcategory" => [
    ["id" => "information", "name" => "information", "categories" => [
      ['id' => 'horizontal', 'name' => 'Horizontal', 'price' => 10, ],
      ['id' => 'vertical',  'name' => 'Vertical', 'price' => 15, ],
     ]]
  ], ],
  ["id" => "print_size", "name" => "Print Size", "subcategory" => [
    ["id" => "information", "name" => "information", "categories" => [
      ['name' => '5"x3.7"', 'id' => '5-7', 'height' => 5, 'width' => 3.7, 'price' => 0, ],
     
    ]],
  ], ],
];



$acrylic_block_photo = [
  ["id" => "direction", "name" => "Direction", "subcategory" => [
    ["id" => "information", "name" => "information", "categories" => [
      ['id' => 'horizontal', 'name' => 'Horizontal', 'price' => 10, ],
      ['id' => 'vertical',  'name' => 'Vertical', 'price' => 15, ],
     ]]
  ], ],
  ["id" => "print_size", "name" => "Print Size", "subcategory" => [
    ["id" => "information", "name" => "information", "categories" => [
      ['name' => '4.3" X 6.7" X 0.8"', 'id' => '4.3-6.7-0.8', 'height' => 4.3, 'width' => 6.7, 'price' => 0, ],
      ['name' => '6.7" X 9.1" X 1.0"', 'id' => '6.7-9.1-1.0', 'height' => 6.7, 'width' => 9.1, 'price' => 0, ],
     
    ]],
  ], ],
];

?>