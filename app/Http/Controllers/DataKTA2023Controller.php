<?php

namespace App\Http\Controllers;

use App\Models\Member2023;
use Illuminate\Http\Request;

class DataKTA2023Controller extends Controller
{
    public function index()
    {
        $data = Member2023::all();
        return view('kta-2023', compact(['data']));
    }
}
