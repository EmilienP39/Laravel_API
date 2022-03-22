<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $partners = Partner::all();
        return view("home",compact("partners"));
    }

    public function image(){
        $partners = Partner::all();
        return view("upload",compact("partners"));
    }

    public function createPartner(){
        return view("create-partner");
    }
}
