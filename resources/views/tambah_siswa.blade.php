@extends('app')
@section('content')
<div class="container">
    <h3>Form Siswa</h3>
    <form action="post" method="POST">
        @csrf
        <input class="form-control mb-2" type="text" name="nama" id="">
        <select class="form-control mb-2" name="kelas" id="">
            <option value="X RPL 1">X RPL 1</option>
            <option value="X RPL 2">X RPL 2</option>
            <option value="XI RPL 1">XI RPL 1</option>
            <option value="XI RPL 2">XI RPL 2</option>
            <option value="XII RPL 1">XII RPL 1</option>
            <option value="XII RPl 2">XII RPL 2</option>
        </select>
        <input type="submit" class="btn btn-success" value="save">
    </form>
</div>

@endsection