<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EstimateController extends Controller
{
    public function index(){
        return view('estimate/app-estimate-index');
    }
    public function demo(){
        return view('estimate/app-estimate-demo');
    }
}
