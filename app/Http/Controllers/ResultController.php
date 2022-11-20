<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataGejala;
use App\Models\DataKerusakan;

class ResultController extends Controller
{
    public function store(Request $request){
        $cf = 0;
        $max = 0;
        $k = [];
        $data = DataGejala::all();
        $answer = [];
        for($i = 1; $i < 17; $i++){
            $answer[$i] = $request[$i];
        }
        
        for($i = 1; $i<11;$i++){
            $k[$i] = 0;
        }

        for($i = 1; $i<17; $i++){
            if($answer[$i] == "Yes"){
                $cf = $cf + $data[$i]["cf"] * (1 - $cf);
            }
        }

        if($answer[1] == "Yes"){
            $k[1] = 0 + $data[0]["cf"] * (1 - 0);
            $k[2] = 0 + $data[0]["cf"] * (1 - 0);
        }
        if($answer[2] == "Yes"){
            $k[1] = $k[1] + $data[1]["cf"] * (1 - $k[1]);
            $k[2] = $k[2] + $data[1]["cf"] * (1 - $k[2]);
            $k[3] = $k[3] + $data[1]["cf"] * (1 - $k[3]);
            $k[4] = $k[4] + $data[1]["cf"] * (1 - $k[4]);
            $k[5] = $k[5] + $data[1]["cf"] * (1 - $k[5]);
            $k[6] = $k[6] + $data[1]["cf"] * (1 - $k[6]);
        }
        if($answer[3] == "Yes"){
            $k[2] = $k[2] + $data[2]["cf"] * (1 - $k[2]);
        }
        if($answer[4] == "Yes"){
            $k[2] = $k[2] + $data[3]["cf"] * (1 - $k[2]);
        }
        if($answer[5] == "Yes"){
            $k[3] = $k[3] + $data[4]["cf"] * (1 - $k[3]);
        }
        if($answer[6] == "Yes"){
            $k[4] = $k[4] + $data[5]["cf"] * (1 - $k[4]);
        }
        if($answer[7] == "Yes"){
            $k[4] = $k[4] + $data[6]["cf"] * (1 - $k[4]);
        }
        if($answer[8] == "Yes"){
            $k[5] = $k[5] + $data[7]["cf"] * (1 - $k[5]);
        }
        if($answer[9] == "Yes"){
            $k[6] = $k[6] + $data[8]["cf"] * (1 - $k[6]);
        }
        if($answer[10] == "Yes"){
            $k[6] = $k[6] + $data[9]["cf"] * (1 - $k[6]);
            $k[9] = $k[9] + $data[9]["cf"] * (1 - $k[9]);
        }
        if($answer[11] == "Yes"){
            $k[7] = $k[7] + $data[10]["cf"] * (1 - $k[7]);
            $k[9] = $k[9] + $data[10]["cf"] * (1 - $k[9]);
        }
        if($answer[12] == "Yes"){
            $k[7] = $k[7] + $data[11]["cf"] * (1 - $k[7]);
            $k[8] = $k[8] + $data[11]["cf"] * (1 - $k[8]);
            $k[10] = $k[10] + $data[11]["cf"] * (1 - $k[10]);
        }
        if($answer[13] == "Yes"){
            $k[8] = $k[8] + $data[12]["cf"] * (1 - $k[8]);
            $k[10] = $k[10] + $data[12]["cf"] * (1 - $k[10]);
        }
        if($answer[14] == "Yes"){
            $k[8] = $k[8] + $data[13]["cf"] * (1 - $k[8]);
        }
        if($answer[15] == "Yes"){
            $k[9] = $k[9] + $data[14]["cf"] * (1 - $k[9]);
        }
        if($answer[16] == "Yes"){
            $k[10] = $k[10] + $data[15]["cf"] * (1 - $k[10]);   
        }

        foreach($k as $ccf){
            if($max < $ccf){
                $max = $ccf;
            }
        }
        return view('user.result', [
            'title' => "combineResult",
            'combineCf' => $k,
            'maxValue' => $max,
            'dataKerusakan' => DataKerusakan::all()]);
        }
}
