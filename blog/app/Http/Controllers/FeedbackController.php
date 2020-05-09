<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\FeedbackRequest;
use App\Models\Feedback;
class FeedbackController extends Controller
{
    public function submit(FeedbackRequest $req){
    	$feedback = new Feedback();
    	$feedback->name = $req->input('name');
    	$feedback->email = $req->input('e-mail');
    	$feedback->phone = $req->input('phone');
    	$feedback->message = $req->input('message');
    	$feedback->rating = $req->input('rating');

    	$feedback->save();

    	return redirect()->route('MainPage');
    }

    public function allData(){
    	$feedback = new Feedback; 
    	return view('pages.gallery', ['data'=>$feedback->orderBy('rating', 'desc')->get()]);
    }
}
