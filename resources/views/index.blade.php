@extends('layout')
@section('content')
<div class="d-flex justify-content-between mb-3">
    <h3>Students List</h3>
    <a class="btn btn-success" href="{{ route('students.create') }}">Add Student</a>
</div>
<table class="table table-bordered align-middle">
    <thead class="table-dark">
        <tr>
            <th>Id</th><th>Name</th><th>Email</th><th>Phone</th><th>Section</th><th>Image</th><th>Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->phone }}</td>
            <td>{{ $student->section }}</td>
            <td><img src="/image/{{ $student->image }}" width="80" height="80"></td>
            <td>
                <a class="btn btn-info btn-sm" href="{{ route('students.show', $student->id) }}">Show</a>
                <a class="btn btn-primary btn-sm" href="{{ route('students.edit', $student->id) }}">Edit</a>
                <form method="POST" action="{{ route('students.destroy', $student->id) }}" class="d-inline" onsubmit="return confirm('Supprimer cet etudiant ?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
