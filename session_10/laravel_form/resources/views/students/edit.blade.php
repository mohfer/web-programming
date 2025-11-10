@extends('layouts.main')

@section('content')
    <h2>Edit Siswa</h2>
    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('students._form')
        <button type="submit" class="btn btn-success">Update</button>
    </form>
@endsection
