<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\goal;

class GoalController extends Controller
{
    //

    public function show(){
        $data=goal::where('user_id', auth()->id())->first();
        if(!$data){
            $data = new goal();
            $data->user_id = auth()->id();
            $data->calories_goal = 0;
            $data->protien_goal = 0;
            $data->carbs_goal = 0;
            $data->save();
        }
        return view("goals", ['data' => $data]);
    }

    public function create(Request $request){

        $data = goal::where('user_id', auth()->id())->first();
        $data->user_id = auth()->id();
        $data->calories_goal = $request->calories_goal;
        $data->protien_goal = $request->protien_goal;
        if($request->carbs_goal){
        $data->carbs_goal = $request->carbs_goal;
        }
        $data->save();

        return redirect()->back();
    }
}