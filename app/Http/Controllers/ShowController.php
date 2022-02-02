<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Grade;
use App\Models\User;
use App\Models\Vacancie;
use App\Models\Workstate;
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
        $workstates = Workstate::all()->take(5);

        return view('auth.admin.index', compact('users', 'roles', 'companies', 'grades', 'workstates'));
    }
    if(auth()->user()->hasAnyRole('Docent', 'docent')) {
        $companies = Company::all()->take(5);
        $grades = Grade::all()->take(5);

        return view('auth.admin.index', compact('companies', 'grades'));
    }

    if(auth()->user()->hasAnyRole('Student', 'student')) {
        $companies = Company::all()->take(5);

        return view('auth.admin.index', compact('companies'));
    }
}

public function search(Request $request)
{
    $search = $request->input('search');

    $users = User::query()
        ->where('firstname', 'LIKE', "%{$search}%")
        ->orWhere('lastname', 'LIKE', "%{$search}%")
        ->orWhere('email', 'LIKE', "%{$search}%")
        ->get();

    $grades = Grade::query()
        ->where('name', 'LIKE', "%{$search}%")
        ->get();

    $vacancies = Vacancie::query()
        ->where('title', 'LIKE', "%{$search}%")
        ->orWhere('body', 'LIKE', "%{$search}%")
        ->orWhere('course', 'LIKE', "%{$search}%")
        ->orWhere('location', 'LIKE', "%{$search}%")
        ->get();

    $companies = Company::query()
        ->where('name', 'LIKE', "%{$search}%")
        ->orWhere('email', 'LIKE', "%{$search}%")
        ->orWhere('address_city', 'LIKE', "%{$search}%")
        ->orWhere('phone', 'LIKE', "%{$search}%")
        ->orWhere('website', 'LIKE', "%{$search}%")
        ->get();

    return view('search.result', compact('users', 'grades', 'companies', 'vacancies'));
}

}
