@extends('app')
@section('content')
<div class="container">
    <h3>Data Siswa</h3>

    <a href="siswa/tambah_siswa"><button class="btn btn-primary float mb-3">Tambah</button></a>
    <br><br>
    @foreach ($data as $row)
    <div class="card mb-1">
        <div class="card-body">
            nama : {{ $row -> nama}} <br>
            kelas : {{ $row -> kelas}} <br>

            <a href="siswa/edit/{{ $row->id }}">Edit</a> |
            <a onclick="confirm('hapus data?')" href="siswa/hapus/{{ $row->id }}">Hapus</a>
        </div>
    </div>

    @endforeach
</div>
@endsection