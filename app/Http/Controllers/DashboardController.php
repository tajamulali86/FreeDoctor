<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;


use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    //
    public function index()
    {
        if(Auth::id()){
            $userType=Auth()->user()->userType;
            if($userType=='admin'){
    
                return view('admin.index');
            }
            else if($userType=='doctor'){
                $patients = Patient::all();
                
                // dd($patients);
                return view('doctor.index', compact('patients'));
                // return view('doctor.index');
    
            }
            else{
                return view('patient.show');
            }
        }
    }

}