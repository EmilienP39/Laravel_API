<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\Picture;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $partners = Partner::all();
        $pictures = Picture::all();
        return view("home",compact("partners","pictures"));
    }

    public function image(){
        $partners = Partner::all();
        return view("upload",compact("partners"));
    }

    public function createPartner(){
        return view("create-partner");
    }
}
