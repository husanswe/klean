<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        if (!Auth::user()->isAdmin()) {
            abort(403);
        }

        return view('users.index')->with([
            'users' => User::with('roles')->paginate(20),
            'roles' => Role::all(),
        ]);
    }

    public function updateRoles(Request $request, User $user)
    {
        if (!Auth::user()->isAdmin()) {
            abort(403);
        }

        $user->roles()->sync($request->input('roles', []));

        return redirect()->route('admin.users')->with('status', 'Roles updated successfully!');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
