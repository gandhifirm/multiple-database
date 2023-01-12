<?php

namespace App\Http\Controllers;

use App\Models\Member2018;
use Illuminate\Http\Request;

class DataKTA2018Controller extends Controller
{
    public function index()
    {
        $data = Member2018::all();
        return view('kta-2018', compact(['data']));
    }
}
