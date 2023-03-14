<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\image;

class ImageController extends Controller
{
    public function index()
    {
        $images = Image::get();
        return view('image.index', compact('images'));
    }

    public function create(Request $request)
    {
        return view('image.create');
    }

    public function store(Request $request)
    {   
        $this->validate($request,[
            'image_path' => 'required|image'
        ]);

        // if(null != $request->file('image_path')){
        //     return redirect()->route('image.create');
        // }
        // 画像フォームでリクエストした画像を取得
        $img = $request->file('image_path');
        // storage > public > img配下に画像が保存される
        $path = $img->store('img', 'public');

        // DBに登録する処理
        Image::create([
            'image_path' => $path,
        ]);


        return redirect()->route('image.index');
    }
}
