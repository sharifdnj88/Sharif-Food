<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\ReservationUserNotification;
use App\Notifications\ReservationAdminNotification;
use App\Notifications\ReservationCancelNotification;
use App\Notifications\ReservationSuccessfullNotification;

class ReservationMessageController extends Controller
{
    public function ShowReservationDashboard()
    {
        $reservation = Reservation::latest()->get();
        return view('pages.reservation.index', [
            'reservation' => $reservation,
        ]);
    }

    public function store(Request $request)
    {
        $reservationid= str_shuffle(456789);

        $reserveid = substr($reservationid, 6, 6);
        
        $data=Reservation::create([
            'reservation_id'         => $reserveid,
            'name'                   => $request->name,
            'email'                    =>$request->email,
            'subject'                  =>$request->subject,
            'date'                      =>$request->date,
            'time'                      =>$request->time,
            'message'                 =>$request->message,
            'type'                       =>'Pending',
        ]);
        $data->notify(new ReservationUserNotification($data));
        Notification::route('mail', [
            'ritaarrafi1995@gmail.com' => 'Shariful Islam',
        ])->notify(new ReservationAdminNotification($data));

        return back() ->with('success','Reservation Request Submitted Successfully.We will contact with you soon.');
    }

    public function updateToReserved($id)
    {
        $data = Reservation::findOrFail($id);

            $data->update([
                'type' => 'Reserved',
            ]);

            $data->notify(new ReservationSuccessfullNotification($data));

        return back()->with('success', 'Reserved successfully');
    }

    public function updateToCancel($id)
    {
        $data = Reservation::findOrFail($id);
                
            $data->update([
                'type' => 'Cancel',
            ]);
            $data->notify(new ReservationCancelNotification($data));

        return back()->with('success', 'Reserve Canceled');
    }

    public function destroy($id)
    {
        $delete = Reservation::findOrFail($id);
        $delete -> delete();
        return back()->with('danger', 'Reserved Message delete successfully');
    }

}
