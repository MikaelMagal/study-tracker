<?php

namespace App\Http\Controllers;

use App\Models\StudySession;
use Illuminate\Http\Request;
use App\Models\Subject;

class StudySessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sessions = StudySession::with('subject')->get();
        $subjects = Subject::all();

        return view('sessions.index', compact('sessions', 'subjects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        StudySession::create([
            'subject_id'       => $request->subject_id,
            'study_date'       => $request->study_date,
            'duration_minutes' => $request->duration_minutes,
            'difficulty_level' => $request->difficulty_level,
            'notes'            => $request->notes
        ]);

        return redirect('/sessions');
    }

    /**
     * Display the specified resource.
     */
    public function show(StudySession $studySession)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StudySession $studySession)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StudySession $studySession)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StudySession $studySession)
    {
        //
    }
}
