<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Foodmenu;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class FoodmenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $food = Foodmenu::latest() -> get();
        return view('pages.home.foodmenu.index', [
            'form_type'        => 'create',
            'food'               => $food
        ]);
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
        // Validate
        $this -> validate($request, [
            'title'         => 'required',
            'photo'       => 'required',
        ]);

        // Image Management
        if( $request ->hasFile('photo') ){
            $img = $request -> file('photo');
            $file_name = md5( time(). rand() ) . '.' . $img -> clientExtension();
            $image = Image::make($img ->getRealPath());
            $image -> save( storage_path('app/public/foods/'). $file_name );
        }else{
            $file_name = null;
        }
              
        
        // Store
            Foodmenu::create([
            'title'        => $request -> title,
            'slug'        => Str::slug($request -> title),
            'desc'        => $request -> desc,
            'photo'     => $file_name
        ]);

        // Return Back
        return back() -> with('success', 'Food-Menu Added Successfully');
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
