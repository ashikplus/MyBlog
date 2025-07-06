<?php

namespace App\Http\Controllers\Admin;

use App\Subscriber;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class SubscriberController extends Controller
{
    public function index(){
    	$subscribers = Subscriber::latest()->get();
    	return view('admin.subscriber',compact('subscribers'));
    }

    public function destroy($subscriber){
    	$subscriber = Subscriber::findOrFail($subscriber)->delete();
    	Toastr::success('Subscriber Successfully Delete :)','Success');
    	return redirect()->back();

    }
}
