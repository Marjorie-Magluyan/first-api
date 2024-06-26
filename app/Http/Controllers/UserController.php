<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            [
                "id" => 1,
                "name" => "Marjorie M",
                "username" => "coco",
                "email" => "marjorie@gmail.com",
                "phone" => "2323232"
            ],

            [
                "id" => 1,
                "name" => "Marj M",
                "username" => "coca",
                "email" => "marjori@gmail.com",
                "phone" => "2323233e2"
            ],

        ];

        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return response()->json($request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
