<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
    {
        $people = [
            [
                'name' => 'Malik',
                'email' => 'malik@example.com',
                'role' => 'student',
                'about' => "My name is Malik and I'm a student."
            ],
            [
                'name' => 'Ali',
                'email' => 'ali@example.com',
                'role' => 'student',
                'about' => 'I am a student of law.'
            ],
            [
                'name' => 'Sara',
                'email' => 'sara+student@example.com',
                'role' => 'student',
                'about' => 'I am a student who loves to read.'
            ],
            [
                'name' => 'John',
                'email' => 'john@example.com',
                'role' => 'student',
                'about' => 'I am passionate about climate science.'
            ],
            [
                'name' => 'Shinchen',
                'email' => 'shinchen@example.com',
                'role' => 'teacher',
                'about' => 'I am a professor of vision science.'
            ],
            [
                'name' => 'Ahmed',
                'email' => 'ahmed@example.com',
                'role' => 'student',
                'about' => 'I am a student of economics.'
            ],
            [
                'name' => 'Raza',
                'email' => 'raza@example.com',
                'role' => 'teacher',
                'about' => 'I am a teacher of English.'
            ],
            [
                'name' => 'Rumi',
                'email' => 'rumi@example.com',
                'role' => 'teacher',
                'about' => 'I teach economics and marketing.'
            ],
            [
                'name' => 'Marie',
                'email' => 'marie@example.com',
                'role' => 'teacher',
                'about' => 'I received the Nobel Prize in Physics in 1903.'
            ],
        ];

        return view('people', compact('people'));
    
}

}
