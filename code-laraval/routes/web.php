<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use app\Http\Controllers\TableControlller;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\FileUploadController;
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
// Route::get('/table/{number?}',[TableController::class,'generate']);

// Route::get('/students', [StudentController::class, 'showStudents']);

// Route::get('/upload', function () {
//     return view('upload');
// });

// Route::post('/upload', [ImageController::class, 'store']);


// Route::get('/people', [PersonController::class, 'index']);

// Route::get('/books/create', function () { return view('books.create');})->name('books.create');

Route::get('/file-upload', function () {return view('file-upload');});
Route::post('/file-upload', [FileUploadController::class, 'upload'])->name('file.upload');