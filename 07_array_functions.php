<?php
$users = ['mat', 'pat', 'kev', 'frank', 'tam'];
//get length of users array
// echo count($users);

//Search users in array
// var_dump(in_array('win', $users));

//Add to user in array
$users[] = 'win';
array_push($users, 'mercy', 'eva', 'mary');
//Add user at the beginning of array
array_unshift($users, 'tracy');

//Remove user from array
array_pop($users); //removes the last index from array
array_shift($users); //removes the first index from array
unset($users[2]); //remove specific index from array

//Split user array into two chunks
$chuncked_array = array_chunk($users, 2);

// print_r($chuncked_array);

// print_r($users);

//Concatenate array

$array1 = [1, 2, 3];
$array2 = [4, 5, 6];

$array3 = array_merge($array1, $array2);
$array4 = [...$array1, ...$array2];

// print_r($array4);

$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];

$c = array_combine($a, $b);

// print_r($c);

$keys = array_keys($c);
// print_r($keys);

$flipped = array_flip($c);
// print_r($flipped);

$numbers = range(1, 20);

// print_r($numbers);

//map method
$newNumbers = array_map(function ($number) {
  return "Number ${number}";
}, $numbers);

// print_r($newNumbers);

$lessThan10 = array_filter($numbers, fn ($number) =>
$number <= 10);

// print_r($lessThan10);

//reduce method
$sum = array_reduce($numbers, fn ($carry, $number) =>
$carry + $number);

var_dump($sum);

//https://www.php.net/manual/en/ref.array.php
