<?php

use Illuminate\Support\Facades\Route;
// Task 1
// Route::get('/table', function () {
//     echo "Welcome to table";
// });
  
// Task 2
// Route::get('/table/{number}', function ($number) {
//       $table = " ";
//       for ($i =1 ; $i <=10; $i++){
//         $table.= "$number x $i = " .($number * $i)."<br>";
//       }
//       return $table;
// });

// Task 3
// Route::get('/table/{number?}', function ($number = 2) {
//     $table = " ";
//       for ($i =1 ; $i <=10; $i++){
//         $table.= "$number x $i = " . ($number * $i)."<br>";
//       }
//       return $table;
// });
// Task 4
Route::get('/table/{number?}', function ($number = 2) {
    $table = " ";
      for ($i =1 ; $i <=10; $i++){
        $table.= "$number x $i = " . ($number * $i)."<br>";
      }
      return $table;
})->whereNumber('number');

