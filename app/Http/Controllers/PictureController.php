<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\Picture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image;

class PictureController extends Controller
{

    public function createThumbnail($path, $width, $height)
    {
        $img = Picture::make($path)->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
        });
        $img->save($path);
    }

    public function imageUploadPost(Request $request)
    {

        $request->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $picture = new Picture([
            "name" => $request->input("name"),
            "path" => Storage::disk('public')->put('images', $request->file('image'))
        ]);
        //$this->createThumbnail($picture->path, 300, 185);
        $picture->save();

        return redirect()->route("all-partner");

    }

    public function index()
    {
        $pictures = Picture::all();
        return view("home", compact("pictures"));
    }

    public function addPicture(Request $request,$partnerId)
    {
        $partner = Partner::find($partnerId);
        $partner->picture_id = $request->input('images');
        $partner->save();

        return(redirect()->route("all-partner"));
    }

}
