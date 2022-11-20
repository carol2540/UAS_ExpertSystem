<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataGejala;

class CertaintyFactor extends Controller
{
    public function show(){
        return view('user.diagnose', [
            "title" => "DataGejala",
            "certainty" => DataGejala::all()
        ]);
    }
}
