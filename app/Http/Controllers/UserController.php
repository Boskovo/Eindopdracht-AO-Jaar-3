<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Validation\ValidationException;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;

class UserController extends Controller
{
    public function index(Request $request)
    {
        if (auth()->user()->hasAnyRole('Admin', 'admin')) {
            $data = User::orderBy('id')->get();
            return view('auth.admin.user.index', compact('data'));
        }
    }


    public function create()
    {
        if (auth()->user()->hasAnyRole('Admin', 'admin')) {
            $roles = Role::pluck('name', 'name')->all();
            return view('auth.admin.user.create', compact('roles'));
        }
    }


    /**
     * @throws ValidationException
     */
    public function store(Request $request)
    {
        if (auth()->user()->hasAnyRole('Admin', 'admin')) {
            $this->validate($request, [
                'firstname' => 'required',
                'lastname' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|same:confirm-password',
                'roles' => 'required'
            ]);

            $input = $request->all();
            $input['password'] = Hash::make($input['password']);

            $user = User::create($input);
            $user->assignRole($request->input('roles'));

            return redirect()->route('users.index')
                ->with('success', 'User created successfully');
        }
    }

    public function edit($id)
    {
        if (auth()->user()->hasAnyRole('Admin', 'admin')) {
            $user = User::find($id);
            $roles = Role::pluck('name', 'name')->all();
            $userRole = $user->roles->pluck('name', 'name')->all();

            return view('auth.admin.user.edit', compact('user', 'roles', 'userRole'));
        }
    }

    /**
     * @throws ValidationException
     */
    public function update(Request $request, $id)
    {
        if (auth()->user()->hasAnyRole('Admin', 'admin')) {
            $this->validate($request, [
                'firstname' => 'required',
                'lastname' => 'required',
                'email' => 'required|email|unique:users,email,' . $id,
                'password' => 'same:confirm-password',
                'roles' => 'required'
            ]);

            $input = $request->all();
            if (!empty($input['password'])) {
                $input['password'] = Hash::make($input['password']);
            } else {
                $input = Arr::except($input, array('password'));
            }

            $user = User::find($id);
            $user->update($input);
            DB::table('model_has_roles')->where('model_id', $id)->delete();

            $user->assignRole($request->input('roles'));

            return redirect()->route('users.index')
                ->with('success', 'User updated successfully');
        }
    }

    public function destroy($id): \Illuminate\Http\RedirectResponse
    {
        if (auth()->user()->hasAnyRole('Admin', 'admin')) {
            User::find($id)->delete();
            return redirect()->route('users.index')
                ->with('success', 'User deleted successfully');
        }
    }
}
