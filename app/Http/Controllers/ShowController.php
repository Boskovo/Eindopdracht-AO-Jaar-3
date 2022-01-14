<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Fine;
use App\Models\Team;
use Illuminate\Support\Facades\Auth;

class ShowController extends Controller
{
    public function __construct()
{
    $this->middleware('auth');
}

public function dashboard(){
        return view('home');
}

}
