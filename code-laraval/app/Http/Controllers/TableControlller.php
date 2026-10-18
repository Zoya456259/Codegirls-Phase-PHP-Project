<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableControlller extends Controller
{
    public function generate($number = 2)
{
     $table = " ";
      for ($i =1 ; $i <=10; $i++){
        $table.= "$number x $i = " . ($number * $i)."<br>";
      }
      return $table;
    whereNumber('number');
}
}
