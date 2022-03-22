<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\Picture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PictureController extends Controller
{
    public function imageUploadPost(Request $request)
    {

        $request->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        $imageName = time() . '.' . $request->input("name");

        $picture = new Picture([
            "name" => $imageName,
            "path" => Storage::disk('public')->put('images', $request->file('image'))
        ]);
        $picture->save();
        $partner = Partner::find($request->get("partners"));
        $partner->picture_id = $picture->id;
        $partner->save();



        /* Store $imageName name in DATABASE from HERE */

        return redirect()->route("all-partner");

    }

    public function index()
    {
        $pictures = Picture::all();
        return view("welcome", compact("pictures"));
    }
}
