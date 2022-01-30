<?php

namespace App\Http\Controllers;

use App\Http\Requests\SettingsUpdateRequest;
use App\Models\Link;
use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        return view('auth.settings.index');
    }

    public function update(SettingsUpdateRequest $request)
    {

        if ($request->password) {
            auth()->user()->update(['password' => Hash::make($request->password)]);
        }

        auth()->user()->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);

        return redirect()->back()->with('success', 'Instellingen zijn bijgewerkt.');
    }

    protected function create_link()
    {
        $link = new Link();
        $link->title = request('title');
        $link->link = request('link');
        $link->user_id = Auth::id();

        $link->save();

        return redirect()->back()->with('success', 'Link is aangemaakt.');
    }

    public function edit_link($id)
    {
        $link = Link::find($id)->get();

        return view('auth.settings.links.edit', compact('link'));
    }

    public function update_link(Request $request, $id)
    {

        Link::where('id', $id)->update($request->all());

        return redirect()->back()->with('success', 'Link is bijgewerkt.');
    }

    public function destroy_link(Request $request, $id): \Illuminate\Http\RedirectResponse
    {
        Link::find($id)->delete();

        return redirect()->back()->with('success', 'Link is verwijderd.');
    }

    protected function create_address()
    {
        $address = new Address();
        $address->street = request('street');
        $address->number = request('number');
        $address->zipcode = request('zipcode');
        $address->city = request('city');
        $address->user_id = Auth::id();

        $address->save();

        return redirect()->back()->with('success', 'Adres is aangemaakt.');
    }

    public function edit_address($id)
    {
        $address = Address::find($id)->get();

        return view('auth.settings.address.edit', compact('address'));
    }

    public function update_address(Request $request, $id): \Illuminate\Http\RedirectResponse
    {

        return redirect()->back()->with('success', 'Adres is bijgewerkt.');
    }

    public function destroy_address(Request $request, $id): \Illuminate\Http\RedirectResponse
    {
        Address::find($id)->delete();

        return redirect()->back()->with('success', 'Adres is verwijderd.');
    }

}
