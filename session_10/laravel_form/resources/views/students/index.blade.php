@extends('layouts.main')

@section('content')
    <h2>Daftar Siswa</h2>
    <a href="#" class="btn btn-primary my-3">Tambah Siswa</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">NIM</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Mohamad Ferdiansyah</td>
                <td>3337240025</td>
                <td>Informatika</td>
                <td></td>
            </tr>
        </tbody>
    </table>
@endsection
