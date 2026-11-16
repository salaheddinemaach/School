@extends('layout')
@section('content')
<h3>Edit Student</h3>
<form method="POST" action="{{ route('students.update', $student->id) }}" enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="mb-3"><label>Name</label><input type="text" class="form-control" name="name" value="{{ old('name', $student->name) }}"></div>
<div class="mb-3"><label>Email</label><input type="text" class="form-control" name="email" value="{{ old('email', $student->email) }}"></div>
<div class="mb-3"><label>Phone</label><input type="text" class="form-control" name="phone" value="{{ old('phone', $student->phone) }}"></div>
<div class="mb-3"><label>Section</label><input type="text" class="form-control" name="section" value="{{ old('section', $student->section) }}"></div>
<div class="mb-3"><label>Image (vide = nafs taswira)</label><input type="file" class="form-control" name="image"></div>
<button type="submit" class="btn btn-primary">Update</button>
<a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
</form>
@endsection
