<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\User;
use App\Models\Vacancie;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::all();

        return view('company.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::pluck('firstname' , 'lastname', 'id');

        return view('company.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'vat_number' => 'required',
            'website' => 'required',
        ]);

        $input = $request->all();

        $company = Company::create($input);


        return redirect()->route('bedrijven.index')
            ->with('success','Bedrijf aangemaakt.');
    }

    /**
     * Display the specified resource.
     *
     * @param Company $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Company $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param Company $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        Company::find($id)->delete();

        return redirect()->back()->with('success', 'Bedrijf is verwijderd.');
    }

    public function vacancies($id)
    {
        $vacancie = Vacancie::find($id);

        return view('company.vacancies.index', compact('vacancie'));
    }
    public function new_vacancy()
    {
        return view('company.vacancies.createvacancy');
    }
    protected function create_vacancy() 
    {
        $vacancie = new Vacancie();
        $vacancie->body = request('body');
        $vacancie->title = request('title');
        $vacancie->course = request('course');
        $vacancie->variant = request('variant');
        $vacancie->level = request('level');
        $vacancie->location = request('location');
        $vacancie->start_date = request('start_date');
        $vacancie->end_date = request('end_date');
        $vacancie->learn = request('learn');
        $vacancie->demands = request('demands');
        $vacancie->offer = request('offer');
        $vacancie->company_id = Auth::id();

        $vacancie->save();

        return redirect()->back()->with('success', 'Vacature is aangemaakt.');
    }
}
