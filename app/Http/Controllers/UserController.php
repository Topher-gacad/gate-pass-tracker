<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    //Display the listing of the users
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    //Show the form for creating a new user
    public function create()
    {
        return view('users.create');
    }

    //Store a newly created user in storage
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

    //Display the specified user
    public function show($id)
    {
        $user = User::findOrFail($id);
        // Return the user details view with the data
        return view('users.show', compact('user'));
    }
}
