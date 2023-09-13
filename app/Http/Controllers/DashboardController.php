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

                $user=Auth()->user();

                return view('admin.index',['user'=>$user]);
            }
            else if($userType=='doctor'){
                $user=Auth()->user();
                $patients = Patient::all();
                return view('doctor.index',['patients'=> $patients, 'user'=>$user]);
    
            }
            else if($userType=='patient'){
                $user=Auth()->user();
                
                // $patients=Patient::get();
                // $patient = $patients->user;
                $patient = $user->patient;
                
            //  if ($patient && $patient->user_id == Auth::id()) {
                 return view('patient.index',['patient'=> $patient, 'user'=>$user]);
            } else {
                // Handle the case where the patient with the given ID is not found or unauthorized.
                return view('patient.not_found');
            }
        }
    }

}
