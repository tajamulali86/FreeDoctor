<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    //
    public function addDoctor()
    {
        return view('admin.createdoctor');
        
    }
    public function storeDoctor(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required'] 
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'userType' =>'doctor',
        ]);
        Session::flash('success', 'Doctor ' . $user->name . ' has been successfully created.');

        return redirect()->route('login'); // Redirect back to the form
    
    }
}

