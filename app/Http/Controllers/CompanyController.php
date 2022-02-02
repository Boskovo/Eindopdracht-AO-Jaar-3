<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\User;
use App\Models\Vacancie;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
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
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        $companies = Company::orderBy('name')->get();;

        return view('company.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */
    public function create()
    {
        if (auth()->user()->hasAnyRole('Admin', 'admin')) {
            $users = User::all();;

            return view('company.create', compact('users'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        if (auth()->user()->hasAnyRole('Admin', 'admin')) {
            $this->validate($request, [
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'website' => 'required',
            ]);

            $company = new Company();

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path("images/companies/$company->name/"), $imageName);

            $company->name = request('name');
            $company->email = request('email');
            $company->phone = request('phone');
            $company->vat_number = request('vat_number');
            $company->website = request('website');
            $company->user_id = request('user_id');
            $company->address_city = request('address_city');
            $company->address_zipcode = request('address_zipcode');
            $company->address_street = request('address_street');
            $company->address_street_number = request('address_street_number');
            $company->logo = $imageName;

            $company->save();

            return redirect()->route('bedrijven.index')
                ->with('success', 'Bedrijf aangemaakt.');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @param Company $company
     * @return Application|Factory|View
     */
    public function show($id, Company $company)
    {
        $company = Company::find($id);

        return view('company.show', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Company $company
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {

        if (auth()->user()->hasAnyRole('Admin', 'admin')) {
            Company::where('id', $id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'vat_number' => $request->name,
                'website' => $request->website,
                'address_street' => $request->address_street,
                'address_street_number' => $request->address_street_number,
                'address_zipcode' => $request->address_zipcode,
                'address_city' => $request->address_city,
            ]);

            return redirect()->back()->with('success', 'Bedrijf is bewerkt.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        if (auth()->user()->hasAnyRole('Admin', 'admin')) {
            Company::find($id)->delete();

            return redirect()->route('bedrijven.index');
        }
    }

    public function vacancy_show($id)
    {
        $vacancy = Vacancie::find($id);

        return view('company.vacancies.main', compact('vacancy'));
    }

    public function vacancy_create()
    {
        if (auth()->user()->hasAnyRole('Admin', 'admin')) {
            return view('company.vacancies.createvacancy');
        }
    }

    protected function vacancy_store()
    {
        if (auth()->user()->hasAnyRole('Admin', 'admin')) {
            $vacancy = new Vacancie();

            $vacancy->body = request('body');
            $vacancy->title = request('title');
            $vacancy->course = request('course');
            $vacancy->variant = request('variant');
            $vacancy->level = request('level');
            $vacancy->location = request('location');
            $vacancy->start_date = request('start_date');
            $vacancy->end_date = request('end_date');
            $vacancy->learn = request('learn');
            $vacancy->demands = request('demands');
            $vacancy->offer = request('offer');
            $vacancy->company_id = Auth::id();
            $vacancy->is_active = 1;

            $vacancy->save();

            return redirect()->back()->with('success', 'Vacature is aangemaakt.');
        }
    }

    public function vacancy_index()
    {
        $vacancies = Vacancie::all();

        return view('company.vacancies.index', compact('vacancies'));
    }
}
