<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    public function index()
    {
        $fakeData = [
            'title' => 'Teste API',
            'name' => 'John Doe',
            'country' => 'USA',
            'city' => 'New York',
            'age' => 30,
            'email' => 'doe_john@example.com'    
        ];
    
        return response()->json($fakeData);
    }
}
