<?php

namespace App\Http\Controllers;

use App\Models\Kitab;

class KitabController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        $kitab = Kitab::get();
        $data = array(
            "status" => 1,
            "data" => $kitab 
        );
        return response()->json($data);
    }
}
