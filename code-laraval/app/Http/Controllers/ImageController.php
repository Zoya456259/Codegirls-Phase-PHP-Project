<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImageController extends Controller
{
     public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|max:2048',
        ]);

        $path = $request->file('image')->store('images', 'public');

       DB::table('images')->insert([
    'name' => $request->name,
    'image' => $path,
    'created_at' => now(),
    'updated_at' => now(),
]);

return redirect('/upload')->with('success', $path);
    }
}

