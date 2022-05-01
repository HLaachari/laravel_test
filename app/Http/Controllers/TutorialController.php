<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tutorial;

class TutorialController extends Controller
{
    public function index(){
        $tutos = Tutorial::all();
        return view('tutorials', compact('tutos'));
    }
}
