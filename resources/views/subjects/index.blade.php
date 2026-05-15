<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-5">
    <h1>Subjects</h1>

    <form method="POST" action="/subjects">
        @csrf
        <input type="text" name="name" placeholder="Subject name">
        <button type="submit">Create</button>
    </form>

    <ul>
        @foreach($subjects as $subject)
            <li>{{ $subject->name }}</li>
        @endforeach
    </ul>
</div>