<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Notification;
use App\Notifications\ReservationMessageNotification;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reserve = Reservation::latest() -> get();
        return view('pages.reservation.index', [
            'reserve'               => $reserve,
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
        
        $said = Reservation::create([
            'name'              => $request -> name,
            'email'              => $request -> email,
            'subject'            => $request -> subject,
            'date'                => $request -> date,
            'time'                => $request -> time,
            'message'           => $request -> message,
        ]);
        
        // User mail Pabee
        $said ->notify(new ReservationMessageNotification($said)); 

        // Admin mail pabe
        Notification::route('mail', [
            'ritaarrafi1995@gmail.com' => 'shariful',
        ])->notify(new ReservationMessageNotification($said));
        return back() -> with('success', 'Your message send successfully');
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
        $delete = Reservation::findOrFail($id);
        $delete -> delete();
        return back() -> with('danger', 'Your message delete successfully');
    }
}
