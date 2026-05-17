@extends('layouts.app')

@section('content')
<h2>Subjects</h2>

<form method="POST" action="/subjects" class="mb-4">
    @csrf

    <div class="input-group">
        <input type="text" name="name" class="form-control" placeholder="Subject name">
        <button class="btn btn-primary">Create</button>
    </div>
</form>

<ul class="list-group">
    @foreach($subjects as $subject)
        <li class="list-group-item">
            {{ $subject->name }}
        </li>
    @endforeach
</ul>
@endsection