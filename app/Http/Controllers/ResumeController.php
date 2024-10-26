<?php

namespace App\Http\Controllers;

use App\Models\ResumeData;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    // Method to display all resumes
    public function index()
    {
        // Retrieve all resume data
        $resumes = ResumeData::all();
        
        // Uncomment the next line to debug and check the output
        // dd($resumes); 
        
        // Return the view with the resumes data
        return view('index', compact('resumes'));  
    }
}
