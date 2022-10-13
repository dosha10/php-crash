<?php

/*

Arrays

- An array stores multiple values in one single variable
- An array can hold multiple values under a single name, and you can access the values by referring to an index number 

Types of arrays in php;
a.) Simple array
b.) Associative array
c.) Multi-dimensional array

*/

// Simple array
$numbers = [1,2,3,4,5,6,7];
$fruits = array('apple', 'mango', 'orange');

// var_dump($numbers);

// Associative array
$colors = [
  1 => 'red',
  2 => 'green',
  3 => 'blue'
];

// echo $colors[3];

$hex = [
    'red' => '#f00',
    'blue' => '#0000FF',
    'green' => '#00f'
];

// echo  $hex['blue'];

$person = [
  'first_name' => 'Francis',
  'last_name' => 'Ndungu',
  'email' => 'frankndungu09@gmail.com',
  'age' => 23
];

echo $person['first_name'];

// Multi-dimensional array
$people = [
    [
        'first_name' => 'Francis',
        'last_name' => 'Ndungu',
        'email' => 'frankndungu09@gmail.com'
    ],
    [
        'first_name' => 'Tracy',
        'last_name' => 'Jesse',
        'email' => 'jessetracy@gmail.com'
    ],
    [
        'first_name' => 'Diana',
        'last_name' => 'Rose',
        'email' => 'deefrost@gmail.com'
    ],
    [
        'first_name' => 'Chelsea',
        'last_name' => 'Wendy',
        'email' => 'chelsea@gmail.com'
    ],
    [
        'first_name' => 'Cynthia',
        'last_name' => 'Mwango',
        'email' => 'cynthiamwango@gmail.com'
    ],
  ];

//   // echo $people[4]['email'];
//   var_dump(json_encode($people));
  