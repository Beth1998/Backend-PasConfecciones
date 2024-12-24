<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MisVisController extends Controller
{
    public function index(){
        return view('Admin.MisVis.index');
    }

    public function edit(){
        
        return view('Admin.MisVis.edit');
    }
}
