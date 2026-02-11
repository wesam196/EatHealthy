<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\meals;

class MealsController extends Controller
{
    //crud
    public function create(Request $request){
        $data=new meals();
        $data->name = $request->name;
        $data->calories = $request->calories;
        $data->protien = $request->protien;
        $data->user_id = auth()->id();
        $data->save();
        return redirect()->back();
    }

    public function read(){
        $data=meals::where('user_id', auth()->id())->get();

        return view("welcome", ['data' => $data]);

    }
    public function delete($id){
        $data=meals::where('user_id', auth()->id())->where('id', $id)->first();
        $data->delete();
        return redirect()->back();
    }
}
