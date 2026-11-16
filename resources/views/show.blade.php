@extends('layout')
@section('content')
<h3>Student Details</h3>
<p><b>ID :</b> {{ $student->id }}</p>
<p><b>Name :</b> {{ $student->name }}</p>
<p><b>Phone :</b> {{ $student->phone }}</p>
<p><b>Email :</b> {{ $student->email }}</p>
<p><b>Section :</b> {{ $student->section }}</p>
<img src="/image/{{ $student->image }}" width="160" height="160"><br><br>
<a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
@endsection
