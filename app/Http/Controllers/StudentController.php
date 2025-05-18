<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function create(Group $group)
    {
        return view('students.create', compact('group'));
    }

    public function store(Request $request, Group $group)
    {
        $validated = $request->validate([
            'surname' => 'required|string|max:255',
            'name' => 'required|string|max:255'
        ]);

        $group->students()->create($validated);

        return redirect()->route('groups.show', $group)->with('success', 'Student added successfully.');
    }

    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }
}