<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JobTitle;

class JobTitlesController extends Controller
{
    public function create()
    {
        return view('jobtitles.create');
    }
    
    public function index()
    {
    	$jobTitles = JobTitle::All()->sortByDesc("title");
        return view('jobtitles.index', compact('jobTitles'));
    }
    
    public function add(Request $request)
    {
        $jobTitle = new JobTitle($request->all());
        //dd($department);
        $jobTitleRequests = JobTitle::All();
            
        $this->validate($request, [
            'title' => 'required',
            ]);
        
        $jobTitle->save();
        return redirect('jobtitles');
    } 
}