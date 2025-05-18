@extends('layouts.app')

@section('content')
    <h1>Add Student to {{ $group->title }}</h1>
    <a href="{{ route('groups.show', $group) }}" class="btn btn-secondary mb-3">Back to Group</a>
    
    <form method="POST" action="{{ route('groups.students.store', $group) }}">
        @csrf
        <div class="mb-3">
            <label for="surname" class="form-label">Surname</label>
            <input type="text" class="form-control" id="surname" name="surname" required>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Student</button>
    </form>
@endsection