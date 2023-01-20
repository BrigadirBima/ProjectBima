<?php
  // Simple array
  $numbers = [1,44,55,22];
  $fruits = array('apple', 'orange', 'pear');

  //var_dump($numbers);
  /* Dimulai dari '0' */
  //echo $fruits[0];

  // Associative Array
  $colors = [
    1=> 'red',
    4=> 'blue',
    6=> 'green'
  ];

  //echo $colors[4];

  $hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f'
  ];

  //echo $hex['red'];

  $person = [
    'first_name' => 'Bima',
    'Last_name' => 'Rizqy',
    'email' => 'emailbima.com'
  ];

  //echo $person['first_name'];

  $people = [
    [
        'first_name' => 'Bima',
        'Last_name' => 'Rizqy',
        'email' => 'emailbima.com'
    ],
    [
        'first_name' => 'Udin',
        'Last_name' => 'Slebew',
        'email' => 'emailudin.com'
    ],
    [
        'first_name' => 'Rudi',
        'Last_name' => 'Imut',
        'email' => 'emailrudi.com'
    ]
  ];

  //echo $people[1] ['email'];
  