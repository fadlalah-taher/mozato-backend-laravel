<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function sayHi(){
        $message = "Hi for test";

        return response()->json([
            "status" => "Success",
            "message" => $message
        ], 200);
    }
}
