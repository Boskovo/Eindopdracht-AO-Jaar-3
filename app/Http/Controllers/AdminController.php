<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
use App\Models\Grade;
use App\Models\Company;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|RedirectResponse
     */
    public function index()
    {

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

}
