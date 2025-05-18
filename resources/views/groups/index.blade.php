@extends('layouts.app')

@section('content')
    <h1>Groups List</h1>
    <a href="{{ route('groups.create') }}" class="btn btn-primary mb-3">Create New Group</a>
    
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Start Date</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($groups as $group)
                <tr>
                    <td>{{ $group->id }}</td>
                    <td>{{ $group->title }}</td>
                    <td>{{ $group->start_from->format('d.m.Y') }}</td>
                    <td>{{ $group->is_active ? 'Active' : 'Inactive' }}</td>
                    <td>
                        <a href="{{ route('groups.show', $group) }}" class="btn btn-info btn-sm">View</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection