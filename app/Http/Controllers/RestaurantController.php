<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function addResto(Request $request){
        $resto = new Restaurant;
        $resto->name = $request->name;
        $resto->rate = $request->rate;
        $resto->type = $request->type;
        $resto->phone_number = $request->phone_number;
        $resto->address = $request->address;
        $resto->opening_hours = $request->opening_hours;
        $resto->closing_hours = $request->closing_hours;
        $resto->restaurant_types_type_id = $request->restaurant_types_type_id;
        $resto->description = $request->description;
        $resto->image = $request->image;
        $resto->save();
        
        return response()->json([
            "status" => "Success",
            "message" => $resto
        ], 200);
    }

    public function displayRestos(){
        $restos = Restaurant::all();
        return response()->json([
            "status" => "Success",
            "restos" => $restos
        ], 200);
    }

    /*public function displayResto(Request $request, $restaurant_id = null){
        if($restaurant_id != null){
            $resto = Restaurant::where('restaurant_id', '=', $request->$restaurant_id)->first();
            return response()->json([
                "status" => "Success",
                "resto" => $resto
            ], 200);
        }
        $restos = Restaurant::all();
        return response()->json([
            "status" => "Success",
            "restos" => $restos
        ], 200);
    } */
}
