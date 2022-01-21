<?php

namespace App\Http\Controllers;

use App\Http\Requests\SettingsUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    public function show()
    {
        return view('auth.settings');
    }

    public function update(SettingsUpdateRequest $request)
    {

        if ($request->password) {
            auth()->user()->update(['password' => Hash::make($request->password)]);
        }

        auth()->user()->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
        ]);

        return redirect()->back()->with('success', 'Settings updated.');
    }
}
