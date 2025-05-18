@extends('layouts.app')

@section('content')
    <h1>{{ $group->title }}</h1>
    <p>Start Date: {{ $group->start_from->format('d.m.Y') }}</p>
    <p>Status: {{ $group->is_active ? 'Active' : 'Inactive' }}</p>
    
    <a href="{{ route('groups.index') }}" class="btn btn-secondary mb-3">Back to List</a>
    <a href="{{ route('groups.students.create', $group) }}" class="btn btn-primary mb-3">Add Student</a>
    
    <h2>Students</h2>
    @if($group->students->count() > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Surname</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($group->students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->surname }}</td>
                        <td>{{ $student->name }}</td>
                        <td>
                            <a href="{{ route('students.show', $student) }}" class="btn btn-info btn-sm">View</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No students in this group yet.</p>
    @endif
@endsection