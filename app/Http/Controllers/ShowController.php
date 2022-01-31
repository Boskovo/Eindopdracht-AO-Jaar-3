<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Grade;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Fine;
use App\Models\Team;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class ShowController extends Controller
{
    public function __construct()
{
    $this->middleware('auth');
}

public function dashboard(){

    if(auth()->user()->hasAnyRole('Admin', 'admin', 'beheerder', 'Beheerder' )) {
        $users = User::all()->take(5);
        $roles = Role::all()->take(5);
        $companies = Company::all()->take(5);
        $grades = Grade::all()->take(5);

        return view('dashboard', compact('users', 'roles', 'companies', 'grades'));
    }
    else{
        return view('dashboard');
    }
}

}
