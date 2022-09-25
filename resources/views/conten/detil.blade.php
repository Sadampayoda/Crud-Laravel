@extends('templete.html')

@section('conten')
    <div class="row mt-4 border-bottom">
        <div class="col">
            <h1>Catatan dari {{ $data->name}} </h1>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col p-4 border border-1 shadow rounded-3">
            <h3> {{ $data->judul}} </h3>
            <p style="color: #bbb" > {{ $data->deskripsi }} </p>
            <a class="btn btn-outline-dark" href="/">Keluar</a>
            <a class="btn btn-outline-dark" href="/">Edit</a>
            <a class="btn btn-outline-dark" href="/">Hapus</a>
        </div>
    </div>
@endsection