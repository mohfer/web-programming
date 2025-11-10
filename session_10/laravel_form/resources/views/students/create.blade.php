@extends('layouts.main')

@section('content')
    <h2>Tambah Siswa</h2>
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        @include('students._form')
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
