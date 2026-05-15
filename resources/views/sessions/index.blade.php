<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-5">
    <h1>Study Sessions</h1>

    <form method="POST" action="/sessions">
        @csrf

        <select name="subject_id">
            @foreach($subjects as $subject)
                <option value="{{ $subject->id }}">
                    {{ $subject->name }}
                </option>
            @endforeach
        </select>

        <input type="date" name="study_date">
        <input type="number" name="duration_minutes" placeholder="Minutes">
        <input type="number" name="difficulty_level" min="1" max="5" placeholder="Difficulty">
        <input type="text" name="notes" placeholder="Notes">

        <button type="submit">Save session</button>
    </form>

    <ul>
        @foreach($sessions as $session)
            <li>
                {{ $session->subject->name }} -
                {{ $session->duration_minutes }} min -
                Difficulty: {{ $session->difficulty_level }}
            </li>
        @endforeach
    </ul>
</div>