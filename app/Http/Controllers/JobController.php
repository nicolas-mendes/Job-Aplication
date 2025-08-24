<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::with('employer')->latest()->simplePaginate(8);

        return view('jobs.index', [
            'jobs' => $jobs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Job $job)
    {
        request()->validate([
            'title' => ['required','string','max:255','min:3'],
            'salary' => ['required','numeric','decimal:0,2'],
            'description' => ['required','string','max:65535']
        ]);

        Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'description' => request('description'),
            'employer_id' => 1
        ]);
        
        return redirect('/jobs');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        return view('jobs.edit', ['job' => $job]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Job $job)
    {
        request()->validate([
            'title' => ['required','string','max:255','min:3'],
            'salary' => ['required','numeric','decimal:0,2'],
            'description' => ['required','string','max:65535']
        ]);

        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
            'description' => request('description')
        ]);

        return redirect('/jobs/'.$job->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        $job->delete();
        return redirect()->route('jobs.index');
    }
}
