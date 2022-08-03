<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use App\HelperFunctions\StringToCamelCase;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('images.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'title' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png|max:5048'
        ]);

        $camelCase = new StringToCamelCase();
        $newImageTitle = $camelCase->camelCase($request->title);
        // dd($newImageTitle);

        $newImageName = date('d-m-Y') . '-' . $newImageTitle . '.' . $request->image->extension();
        // dd($newImageName);

        $request->image->move(public_path('itemImages'), $newImageName);
        
        $image = Image::create([
            'title' => $newImageTitle,
            'image_path' => $newImageName
        ]);

        return redirect('/images')->with('message', $newImageName);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
