<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BookingRequest;
use App\Models\Booking;

class BookingController extends Controller
{
    //

    public function submit(BookingRequest $req){
   

    $booking=new Booking();
    $booking->name=$req->input('name');
    $booking->name=$req->input('email');
//    $booking->name=$req->input('RoomType');
	$booking->name=$req->input('arrival');
    $booking->name=$req->input('depart');

    $booking -> save();

    return redirect()->route('MainPage')->with('success', 'Your Request is send to Hotel Management.');
}
}
