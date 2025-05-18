@extends('layouts.app')

@section('content')
    <h1>{{ $student->surname }} {{ $student->name }}</h1>
    <p>Group: {{ $student->group->title }}</p>
    <p>Group Start Date: {{ $student->group->start_from->format('d.m.Y') }}</p>
    
    <a href="{{ route('groups.show', $student->group) }}" class="btn btn-secondary">Back to Group</a>
@endsection