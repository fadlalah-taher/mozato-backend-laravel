<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function getAllUsers($id = null){
        if($id != null){
            $restos = User::find($id);
            //$restos = $restos? $restos->name : '';
        }else{
            $restos = User::all();
        }
        
        return response()->json([
            "status" => "Success",
            "restos" => $restos
        ], 200);
    }

    /*public function signUp(Request $request, $user_type_id){
        die($request);
        $user = [];
        $user["first_name"] = $request->fnamez;
        $user["last_name"] = $request->lnamez;
        $user["user_type_id"] = $user_type_id;

        return response()->json([
            "status" => "Success",
            "users" => $user
        ], 200);
    }*/
}
