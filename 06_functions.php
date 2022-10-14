<?php

// function registerUser($email) //argument
// {
//     echo $email . " registered";

// }

// // registerUser("Frank"); //param

// function sum($n1 = 25, $n2 = 20) {
//     return $n1 + $n2;
// }

// // $number = sum();
// // echo $number;

// $subtract = function($n1 = 50, $n2 = 20) {
//     return $n1 - $n2;
// };

// // echo $subtract();


// //arrow functions
// $multiply = fn($n1 = 9, $n2 = 9) => $n1 * $n2;

// echo $multiply();

// function sum(...$nums)
// {
//     $sum = 0;
//     foreach ($nums as $n) {
//         $sum += $n;
//     }
//     return $sum;
// }

// echo sum(1, 2, 3, 4, 5, 6);

function sum(...$nums)
{
    return array_reduce($nums, fn ($carry, $n) => $carry + $n);
}

echo sum(1, 2, 3, 4, 5, 6);
