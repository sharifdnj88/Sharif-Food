<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Support\Str;
use App\Models\Foodcategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FoodcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_food = Foodcategory::latest() -> get();
        return view('pages.menu..category.index', [
            'form_type'            => 'create',
            'all_food'               => $all_food
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
            'name'         => 'required',
        ]);
              
        
        // Store
            Foodcategory::create([
            'name'        => $request -> name,
            'slug'        => Str::slug($request -> name),
        ]);

        // Return Back
        return back() -> with('success', 'Food-Category Added Successfully');
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
