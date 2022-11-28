<?php

namespace App\Http\Controllers;

use App\Models\DataGejala;
use App\Models\DataKerusakan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard_admin');
    }

    public function dataGejala() 
    {

        $dataGejala = DataGejala::all();
        return view("admin.data_gejala", [
            "dataGejala" => $dataGejala
        ]); 
    }

    public function dataKerusakan() 
    {
        return view("admin.data_kerusakan", [
            "dataKerusakan" => DataKerusakan::all()
        ]);
    }
}
