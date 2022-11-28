<?php

namespace App\Http\Controllers;

use App\Models\Solution;
use App\Models\DataKerusakan;

use Illuminate\Http\Request;

class SolutionController extends Controller
{
    public function showArticle(int $datakerusakan){
        return view('user.solution',[
            "title" => "Solution Article",
            "solusi" => Solution::where("solutionforid",$datakerusakan)->get(),
            "kerusakan" => DataKerusakan::find($datakerusakan)
        ]);
    }

}
