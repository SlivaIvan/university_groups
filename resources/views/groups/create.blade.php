@extends('layouts.app')

@section('content')
    <h1>Create New Group</h1>
    <a href="{{ route('groups.index') }}" class="btn btn-secondary mb-3">Back to List</a>
    
    <form method="POST" action="{{ route('groups.store') }}">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Group Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="start_from" class="form-label">Start Date</label>
            <input type="date" class="form-control" id="start_from" name="start_from" required>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="1" checked>
            <label class="form-check-label" for="is_active">Active Group</label>
        </div>
        <button type="submit" class="btn btn-primary">Create Group</button>
    </form>
@endsection