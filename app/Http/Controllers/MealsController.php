<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\meals;
use App\Models\goal;
use Illuminate\Support\Facades\Http;

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

    public function generate(Request $request)
{
    $response = Http::withHeaders([
        'Content-Type' => 'application/json',
        'X-goog-api-key' => env('GOOGLE_GEMINI_API_KEY'),
    ])->post('https://generativelanguage.googleapis.com/v1beta/models/gemini-3.1-flash-lite-preview:generateContent', [
        "contents" => [
            [
                "parts" => [
                    [
                        "text" => 
                        "You are a nutrition assistant.
                            Only answer questions about food nutrition.
                            Only return:
                            - Protein:
                            - Calories:
                            - Carbs: 

                            If the question is not about food nutrition,
                            respond exactly with:
                            ERROR: Only food nutrition questions allowed. ,". $request->describe
                    ]
                ]
            ]
        ]
    ]);
    $text = $response->json('candidates.0.content.parts.0.text');

preg_match('/Protein:\s*(\d+)/i', $text, $proteinMatch);
preg_match('/Calories:\s*(\d+)/i', $text, $caloriesMatch);
preg_match('/Carbs:\s*(\d+)/i', $text, $carbsMatch);

$result = [
    'protein' => isset($proteinMatch[1]) ? (int)$proteinMatch[1] : null,
    'calories' => isset($caloriesMatch[1]) ? (int)$caloriesMatch[1] : null,
    'carbs' => isset($carbsMatch[1]) ? (int)$carbsMatch[1] : null,
];

//return $text;

    return redirect()->back()->with('generatedMeal', $result)->withInput();
}

    public function read(){
        $data=meals::where('user_id', auth()->id())->get();
        $goal=goal::where('user_id', auth()->id())->first();
        return view("welcome", ['data' => $data , 'goal' => $goal]);

    }
    public function delete($id){
        $data=meals::where('user_id', auth()->id())->where('id', $id)->first();
        $data->delete();
        return redirect()->back();
    }
}
