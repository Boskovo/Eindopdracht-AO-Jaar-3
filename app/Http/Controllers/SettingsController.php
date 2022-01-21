<?php

namespace App\Http\Controllers;

use App\Http\Requests\SettingsUpdateRequest;
use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class SettingsController extends Controller
{
    public function show()
    {
        return view('settings.index');
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

        return redirect()->back()->with('success', 'Instellingen bijgewerkt.');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'user_id' => ['required', 'integer', 'max:255'],
            'title' => ['required', 'string', 'max:255'],
            'link' => ['required', 'string', 'max:255'],
        ]);
    }

    protected function create_link(array $data)
    {
        return Link::create([
            'user_id' => Auth::id(),
            'title' => $data['title'],
//            'icon' => $data['icon'],
            'link' => $data['link'],
        ]);
    }
}
