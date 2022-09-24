<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Allfood;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Foodcategory;
use Intervention\Image\Facades\Image;

class AllfoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_food = Allfood::latest() -> get();
        $category = Foodcategory::latest() -> get();
        return view('pages.menu.index', [
            'form_type'            => 'create',
            'all_food'               => $all_food,
            'category'              => $category
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
            'name'         => 'required|unique:allfoods',
            'photo'         => 'required',
            'cat'             => 'required',
            'price'          => 'required',
        ]);

        // Image Management
        if( $request ->hasFile('photo') ){
            $img = $request -> file('photo');
            $file_name = md5( time(). rand() ) . '.' . $img -> clientExtension();
            $image = Image::make($img ->getRealPath());
            $image -> save( storage_path('app/public/allfoods/'). $file_name );
        }else{
            $file_name = null;
        }
              
        
        // Store
            Allfood::create([
            'name'        => $request -> name,
            'foodtypes'   => json_encode( $request -> cat ),
            'price'         => $request -> price,
            'photo'        => $file_name
        ]);

        // Return Back
        return back() -> with('success', 'Food-Item Added Successfully');
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
