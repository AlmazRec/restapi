<?php

namespace App\Http\Controllers;

use App\Models\Dog;
use Illuminate\Http\Request;

class DogController extends Controller
{
    public function index()
    {
        return Dog::all();
    }


    public function store(Request $request)
    {
        $data = $request->validate([
           'name' => 'string|max:255',
            'breed' => 'string|max:255',
            'age' => 'integer|min:0',
        ]);

        $dog = Dog::create($data);
        return response()->json($dog, 201);
    }


    public function show(Dog $dog)
    {
        return $dog;
    }


    public function update(Request $request, Dog $dog)
    {
        $data = $request->validate([
            'name' => 'string|max:255',
            'breed' => 'string|max:255',
            'age' => 'integer|min:0',
        ]);

        $dog->update($data);
        return response()->json($dog);
    }


    public function destroy(Dog $dog)
    {
        $dog->delete();
        return response()->json(null, 204);
    }
}
