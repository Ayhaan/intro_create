<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index(){
        //
    }
    public function create(){
        return view('admin.photoCreate');
    }
    public function store(Request $request){
        // dd($request->nom);
        $photo = new Photo();
        $photo->nom = $request->nom;
        $photo->path = $request->path;
        $photo->save();
        // return redirect()->back();
        return redirect()->route('home');
    }
}
