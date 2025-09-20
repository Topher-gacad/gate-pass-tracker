<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); 

        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|integer|unique:users,id',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
            'company' => 'nullable|string',
            'department' => 'nullable|string',
            'full_name' => 'nullable|string',
            'job_title' => 'nullable|string',
            'role' => 'nullable|string|in:guard,admin',
        ]);

        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);

        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);       

        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'full_name' => 'nullable|string|max:255',
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($user->id),
            ],
            'role' => 'nullable|string|in:guard,admin',
            'company' => 'nullable|string',
            'department' => 'nullable|string',
            'job_title' => 'nullable|string',
            'password' => 'nullable|string|min:6|confirmed',
    ]);

        $user->update($validated);

            // if (!empty($validated['password'])) {
            //     $user->password = Hash::make($validated['password']);
            // }

        $user->save();

        return redirect()->route('users.index', $user->id)->with('success', 'User updated successfully.');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}
