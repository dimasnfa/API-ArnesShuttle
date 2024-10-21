<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Simple extends Controller
{
    public function index()
    {
        $fakeData = [
            'id' => 1,
            'name' => 'Api arnes',
            'email' => 'arnes@gmail.com'
        ];

        return response()->json($fakeData);
    }
}
