<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patient = User::where('userType', 'patient')->first();
    
        if ($patient) {
            return view('patient.index')->with('patient', $patient);
        } else {
            return view('no_patients_found');
        }
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        return view('patient.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());
        $rules = [
            
            'number' => 'required',
            'age' => 'required',
            'country' => 'required',
            'address' => 'required',
            'illness' => 'required',
            'file' => 'required|file|mimes:jpg,jpeg,png,webp,pdf|max:10048', // Max size in kilobytes (2MB)
            // Add more rules for other fields
        ];
        
        $customMessages = [
            'file.required' => 'Please select a file.',
            'file.mimes' => 'The file must be in JPG, JPEG, PNG, WEBP, or PDF format.',
            'file.max' => 'The file size must be less than 10MB.',
        ];
        
        
        $validator = Validator::make($request->all(), $rules, $customMessages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
            
        }
        
        // Handle file upload
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $number = $request->input('number'); 
            $fileExtension = $file->getClientOriginalExtension();
            $timestamp = now()->timestamp; // This gets the current timestamp

            $file_path = $file->storeAs('uploads', $number . '_' . $timestamp . '.' . $fileExtension, 'public');                
        } else {
            $file_path = null;
        }
        
        // Create a new Volunteer record
        Patient::create([
            'number' => $request->input('number'),
            'age' => $request->input('age'),
            'country' => $request->input('country'),
            'address' => $request->input('address'),
           
            'illness' => $request->input('illness'),
            'file_path' => $file_path,
            'user_id' => Auth::id(), 
        ]);
        // dd($request);
        // dd($request->all());
        // $volunteer = Volunteer::find($request->voter_id);
        // $data=$request->input('name');
        // $volunteer = Volunteer::find($voterId);
        // $volunteerEmail = $request->input('email');
//  Mail::to($volunteerEmail)->send(new ThankYouEmail($volunteer));


        // Redirect to a thank-you page
        return view('/dashboard');
    

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
        $patient = Patient::find($id);
    
        if ($patient && $patient->user_id == Auth::id()) {
            return view('patient.show')->with('patient', $patient);
        } else {
            // Handle the case where the patient with the given ID is not found or unauthorized.
            return view('patient.not_found');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $patient = Patient::find($id);
    
        if ($patient && $patient->user_id == Auth::id()) {
            return view('patient.edit')->with('patient', $patient);
        } else {
            // Handle the case where the patient with the given ID is not found or unauthorized.
            return view('patient.not_found');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        $file_path = $patient->file_path; // Get the current file path
    
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $number = $request->input('number'); 
            $fileExtension = $file->getClientOriginalExtension();
            $timestamp = now()->timestamp; // This gets the current timestamp
    
            $newFilePath = $file->storeAs('uploads', $number . '_' . $timestamp . '.' . $fileExtension, 'public');
    
            // Update the file path to the new one
            $file_path = $newFilePath;
        }
    
        // Update the patient record
        $patient->update([
            'number' => $request->input('number'),
            'age' => $request->input('age'),
            'country' => $request->input('country'),
            'address' => $request->input('address'),
            'illness' => $request->input('illness'),
            'file_path' => $file_path,
        ]);
    
        return view('patient.show')->with('patient', $patient);
        // If a new file was uploaded, you may want to delete the old one here if it's no longer needed.
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);
    
        $user = $request->user();
    
        // Check if the user has an associated patient record
        if ($user->patient) {
            $user->patient->delete(); // Delete the associated patient record
        }
    
        Auth::logout();
    
        $user->delete();
    
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}