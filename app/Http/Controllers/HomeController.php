<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\StudySession;

class HomeController extends Controller
{
    public function index()
    {
        $subjectsCount = Subject::count();
        $sessionsCount = StudySession::count();
        $totalMinutes = StudySession::sum('duration_minutes');
        $sessions = StudySession::with('subject')->latest()->take(5)->get();

        return view('home', compact(
            'subjectsCount',
            'sessionsCount',
            'totalMinutes',
            'sessions'
        ));
    }
}