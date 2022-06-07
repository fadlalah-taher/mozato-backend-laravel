<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{

    public function getAllUsers(){
        $users = User::all();

        return response()->json([
            "status" => "Success",
            "users" => $users
        ], 200);
    }

   


    public function addUser(Request $request){
        $user = new User;
        $user->full_name = $request->full_name;
        $user->email = $request->email;
        $user->password = hash('sha256', $request->password);
        $user->phone_number = $request->phone_number;
        $user->address = $request->address;
        $user->user_role = $request->user_role;
        $user->gender = $request->gender;
        $user->age = $request->age;
        $user->save();
        
        return response()->json([
            "status" => "Success",
            "message" => $user
        ], 200);
    }


    public function login(Request $request){
        $user = User::where('email', '=', $request->email)->first();
        $password = hash('sha256', $request->password);
        $user_password = User::where('password', '=',$password)->first();
        if($user){
            if($user_password){
                return response()->json([
                    "status" => "Success",
                    "message" => "successfully Logged in"
                ], 200);
            }
        }
    }

    public function updateProfile(Request $request, $user_id){
        $user = User::where('user_id', '=', $user_id)->update(['full_name' => $request->input('full_name'),'email' => $request->input('email'),'password' => hash('sha256', $request->password),'phone_number' => $request->input('phone_number'),'address' => $request->input('address'),'gender' => $request->input('gender'),'age' => $request->input('age')]);
        return response()->json([
            "status" => "Success",
            "message" => $user
        ], 200);
    }

}
