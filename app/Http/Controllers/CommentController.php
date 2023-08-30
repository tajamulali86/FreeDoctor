<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //

    // public function index($)
    public function store(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileExtension = $file->getClientOriginalExtension();
            $timestamp = now()->timestamp; // This gets the current timestamp

            $file_path = $file->storeAs('uploads', $timestamp . '.' . $fileExtension, 'public');                
        } else {
            $file_path = null;
        }
        // $input = $request->all();

        $request->validate([
            'body'=>'required',
        ]);

        $input['user_id'] = auth()->user()->id;

        Comment::create([ 
        'user_id' =>  $request->input('user_id'),
        'body' => $request->input('body'),
        'file_path' => $file_path,]);

        return back();
        
    }
    
}
