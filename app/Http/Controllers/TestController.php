<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        $var1 = 'using controller';
        return view('hello', compact('var1'));
    }
}
