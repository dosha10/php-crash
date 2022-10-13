<?php

/* ------------ For Loop ------------ */


/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

// for($x = 0; $x <= 5; $x++){
//     echo $x;
// }

/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/

// $x = 1;

// while ($x <= 15) {
//     echo 'Number ' . $x . '<br>';
//     $x++;
// }

// $posts = ['First Post ', 'Second Post ', 'Third Post'];

// for($x = 0; $x < count($posts); $x++) {
//     echo $posts[$x];
// }

// foreach($posts as $post) {
//     echo $post;
// }


$person = [
    'first_name' => 'Calvin',
    'last_name' => 'Kidavasi',
    'email' => 'calvin@gmail.com',
    'hobbies' => [' Tennis', ' Video Games']
];

// using foreach with an associative arrray

foreach ($person as $key => $value) {
    if (is_array($value)) {
        echo $key .' -'. implode($value);
    } else {
        echo "$key - $value<br>";
    }
}

// $counter = 0;
// while ($counter < 10);{
//   echo $counter.'<br>';
//   $counter++;
// }

// for ($i = 0; $i < 10; $i++) {
//   echo $i.'<br>';
// }

// $fruits = ["Apple ", "Orange ", "Pears"];
// foreach ($fruits as $fruit) {
//   echo $fruit;
// }
