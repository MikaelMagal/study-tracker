@extends('layouts.app')

@section('content')
<h2>Study Sessions</h2>

<form method="POST" action="/sessions" class="mb-4">
    @csrf

    <select name="subject_id" class="form-select mb-2">
        @foreach($subjects as $subject)
            <option value="{{ $subject->id }}">
                {{ $subject->name }}
            </option>
        @endforeach
    </select>

    <input type="date" name="study_date" class="form-control mb-2">
    <input type="number" name="duration_minutes" class="form-control mb-2" placeholder="Minutes">
    <input type="number" name="difficulty_level" class="form-control mb-2" placeholder="Difficulty">
    <input type="text" name="notes" class="form-control mb-2" placeholder="Notes">

    <button class="btn btn-success">Save session</button>
</form>

<ul class="list-group">
    @foreach($sessions as $session)
        <li class="list-group-item">
            <strong>{{ $session->subject->name }}</strong> -
            {{ $session->duration_minutes }} min -
            Difficulty: {{ $session->difficulty_level }} -
            Date: {{ $session->study_date }}<br>
            {{ $session->notes }}
        </li>
    @endforeach
</ul>
@endsection