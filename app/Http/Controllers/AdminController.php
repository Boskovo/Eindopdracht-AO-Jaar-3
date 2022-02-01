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

            return view('auth.admin.index', compact('users', 'roles', 'companies', 'grades'));
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

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
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
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
