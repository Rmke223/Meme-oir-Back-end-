<?php

namespace App\Http\Controllers;
use App\Models\Meme;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class MemesController extends Controller
{
    public function index(Request $request)
    {
        return Meme::all();
    }
    public function store(Request $request)
    {
        $meme = new Meme;
        $input=$request->all();
        $meme->users_id=$input['users_id'];
        $meme->meme_url=$input['meme_url'];
        $meme->save();
    }
    public function delete($id){
        $meme = Meme::find($id); 
        $meme->delete(); 
    }


}
