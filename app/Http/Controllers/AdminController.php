<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CallMeeting;

class AdminController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('admin.dashboard');
    }

    public function meetings(){
    	$meetings = CallMeeting::get();
        return view('admin.meetings', compact('meetings'));
    }
}    