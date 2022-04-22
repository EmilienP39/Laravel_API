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
        $partner->cp = $request->input(('cp_partner'));
        $partner->city = $request->input("ville_partner");
        $partner->votes = 0;
        if($request->get("images") == 0){
            $partner->picture_id = null;
        }else{
            $partner->picture_id = $request->get("images");
        }
        $partner->save();

        return(redirect()->route("all-partner"));
    }

    public function delete($id){
        $partner = Partner::find($id);
        $partner->delete();
        return(redirect()->route("all-partner"));
    }

    public function voteUpPartner($id){
        $partner = Partner::find($id);
        $partner->votes = $partner->votes + 1 ;
        $partner->save();

        return(redirect()->route("all-partner"));
    }
    public function voteDownPartner($id){
        $partner = Partner::find($id);
        $partner->votes = $partner->votes - 1 ;
        $partner->save();

        return(redirect()->route("all-partner"));
    }

    public function indexApi(){
        $partners = Partner::all();
        return $partners;
    }

    public function getOneApi($id){
        $partner = Partner::find($id);
        return $partner;
    }
}
