@extends('app')
@section('content')
<div class="container">
    <h3>Edit Siswa</h3>
    <form action="/siswa/update" method="POST">
        @csrf
        <label for="">Nama Label</label>
        <input type="hidden" name="id" value="{{ $data->id }}">
        <input class="form-control mb-2" type="text" name="nama"
        value="{{ $data->nama }}" id="">
        <label for="">Kelas</label>
        <select class="form-control mb-2" name="kelas" id="">
            <option value="X RPL 1" {{$data->kelas == "X RPL 1"? 'selected' : ''}}>X RPL 1</option>
            <option value="X RPL 2" {{$data->kelas == "X RPL 2"? 'selected' : ''}}>X RPL 2</option>
            <option value="XI RPL 1" {{$data->kelas == "XI RPL 1"? 'selected' : ''}}>XI RPL 1</option>
            <option value="XI RPL 2" {{$data->kelas == "XI RPL 2"? 'selected' : ''}}>XI RPL 2</option>
            <option value="XII RPL 1" {{$data->kelas == "XII RPL 1"? 'selected' : ''}}>XII RPL 1</option>
            <option value="XII RPL 2" {{$data->kelas == "XII RPL 2"? 'selected' : ''}}>XII RPL 2</option>
            </select>
        <input type="submit" class="btn btn-success" value="save">
    </form>
</div>

@endsection