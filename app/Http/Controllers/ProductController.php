<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
   
    public $products = [
        [
            'id' => 1,
            'name' => 'Product 1',
            'description' => 'This is P1'
        ], 
        [
            'id' => 2,
            'name' => 'Product 2',
            'description' => 'This is P2'
        ], 
        [
            'id' => 3,
            'name' => 'Product 3',
            'description' => 'This is P3'
        ], 
        [
            'id' => 4,
            'name' => 'Product 4',
            'description' => 'This is P4'
        ], 
        [
            'id' => 5,
            'name' => 'Product 5',
            'description' => 'This is P5'
        ]
    ];

    public function index()
    {
        return response()->json($this->products);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return response()->json([
            'message' => "Product created successfully"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json([
            'message' => "Product ID: " . $id
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return response()->json([
            'message' => "Product " . $id . " updated successfully"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return response()->json([
            'message' => "Product " . $id . " deleted successfully"
        ]);
    }
}
