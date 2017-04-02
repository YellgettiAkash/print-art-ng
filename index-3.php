<?php

$types_of_print = [
"print_size" => [
  [
    'name' => '5"x3.7"',
    'id' => '5-7',
    'price' => 0,
    'active' => true,
  ],
  [
    'name' => '7"x5.2"',
    'id' => '7-2',
    'price' => 0,
  ],
  [
    'name' => '9"x6.7"',
    'id' => '9-7',
    'price' => 0,
  ],
  [
    'name' => '11"x8.2"',
    'id' => '11-8.2"',
    'price' => 0,
  ],
  [
    'name' => '13"x9.7"',
    'id' => '13-9.7"',
    'price' => 0,
  ],
  [
    'name' => '15"x11.2"',
    'id' => '15-11.2"',
    'price' => 0,
  ],
  [
    'name' => '17"x12.7"',
    'id' => '17-12.7"',
    'price' => 0,
  ],
  [
    'name' => '19"x14.2"',
    'id' => '19-14.2"',
    'price' => 0,
  ],
  [
    'name' => '20"x15"',
    'id' => '20-15"',
    'price' => 0,
  ]
],

"mdf-frame" => [
     [
        'id' => 'assets/images/corner/corner_1.png',
        'name' => 'frame1',
        'price' => 10,
      ],
     [
        'id' => 'assets/images/corner/corner_2.png',
        'name' => 'frame2',
        'price' => 15,
      ],
     [
        'id' => 'assets/images/corner/corner_3.png',
        'name' => 'frame3',
        'price' => 10,
      ],
     [
        'id' => 'assets/images/corner/corner_4.png',
        'name' => 'frame1',
        'price' => 10,
      ],
     [
        'id' => 'assets/images/corner/corner_5.png',
        'name' => 'frame2',
        'price' => 15,
      ],
     [
        'id' => 'assets/images/corner/corner_6.png',
        'name' => 'frame3',
        'price' => 10,
      ],
     [
        'id' => 'assets/images/corner/corner_7.png',
        'name' => 'frame1',
        'price' => 10,
      ],
     [
        'id' => 'assets/images/corner/corner_8.png',
        'name' => 'frame2',
        'price' => 15,
      ],
     [
        'id' => 'assets/images/corner/corner_9.png',
        'name' => 'frame3',
        'price' => 10,
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
      ],
    ],


     'color-frame' => [
    
      [
        'id' => 'grey',
        'name' => 'frame1',
        'price' => 10,
      ],
      [
        'id' => 'red',
        'name' => 'frame2',
        'price' => 15,
      ],
      [
        'id' => 'blue',
        'name' => 'frame3',
        'price' => 10,
		]
]
 



]
;

echo "<pre>".print_r($types_of_print,true);