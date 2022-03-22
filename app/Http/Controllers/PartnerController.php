<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function createApi(Request $request){
        $item = Partner::all();
        return response()->json($item);
    }

    public function storePartner(Request $request){
        $partner = new Partner();
        $partner->name = $request->input("nom_partner");
        $partner->description = $request->input("description");
        $partner->address = $request->input("address_partner");
        $partner->city = $request->input("ville_partner");
        $partner->save();

        return(redirect()->route("all-partner"));
    }
}
