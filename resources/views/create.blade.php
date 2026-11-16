@extends('layout')
@section('content')
<h3>Add Student</h3>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="POST" action="{{ route('students.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3"><label class="form-label">Name</label><input type="text" class="form-control" name="name" value="{{ old('name') }}"></div>
    <div class="mb-3"><label class="form-label">Email</label><input type="text" class="form-control" name="email" value="{{ old('email') }}"></div>
    <div class="mb-3"><label class="form-label">Phone</label><input type="text" class="form-control" name="phone" value="{{ old('phone') }}"></div>
    <div class="mb-3"><label class="form-label">Section</label><input type="text" class="form-control" name="section" value="{{ old('section') }}"></div>
    <div class="mb-3"><label class="form-label">Image</label><input type="file" class="form-control" name="image"></div>
    <button type="submit" class="btn btn-primary">Add Student</button>
    <a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
</form>
@endsection
