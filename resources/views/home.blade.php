@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h1>Study Tracker</h1>
        <p class="text-muted">
            Track your study sessions, subjects and progress.
        </p>
    </div>

    <div class="d-flex gap-2">
        <a href="/subjects" class="btn btn-primary">Subjects</a>
        <a href="/sessions" class="btn btn-success">Sessions</a>
    </div>
</div>

<div class="row mb-4">
    <div class="col-md-4">
        <div class="card p-3">
            <h5>Total Subjects</h5>
            <h2>{{ $subjectsCount }}</h2>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-3">
            <h5>Total Sessions</h5>
            <h2>{{ $sessionsCount }}</h2>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-3">
            <h5>Total Minutes</h5>
            <h2>{{ $totalMinutes }}</h2>
        </div>
    </div>
</div>

<div class="card p-4 mb-4">
    <h4>Recent Sessions</h4>

    <table class="table">
        <thead>
            <tr>
                <th>Subject</th>
                <th>Date</th>
                <th>Minutes</th>
                <th>Difficulty</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sessions as $session)
                <tr>
                    <td>{{ $session->subject->name }}</td>
                    <td>{{ $session->study_date }}</td>
                    <td>{{ $session->duration_minutes }}</td>
                    <td>{{ $session->difficulty_level }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="card p-4">
    <h4>Study Calendar</h4>
    <input type="date" class="form-control">
</div>

@endsection