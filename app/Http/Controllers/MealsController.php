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
        $data->save();
        return redirect()->back();
    }

    public function read(){
        $data=meals::all();

        return view("welcome", ['data' => $data]);

    }
    public function delete($id){
        $data=meals::find($id);
        $data->delete();
        return redirect()->back();
    }
}
