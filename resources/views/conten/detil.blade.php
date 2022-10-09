@extends('templete.html')

@section('conten')
    <div class="row mt-4 border-bottom">
        <div class="col">
            <h1>Catatan dari {{ $data->name}} </h1>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-inline p-4 border border-1 shadow rounded-3 ">
            <h3> {{ $data->judul}} </h3>
            <p style="color: #bbb" > {{ $data->deskripsi }} </p>
            <div class="row">
                <div class="col-1">
                    <a class="btn btn-outline-dark" href="/" >Keluar</a>
                </div>
                <div class="col-1">
                    <form method="GET" action="/crud/{{$data->id}}/edit">
                        <button class="btn btn-outline-dark" >Edit</button>
                    </form>
                    
                </div>
                <div class="col-1">
                    <form action="/crud/{{$data->id}}" method="POST">
                        @method('delete')
                        @csrf
                        <button class="btn btn-outline-dark ">Hapus</button>
                    </form>
                </div>
            </div>
            
            
            
        </div>
    </div>
@endsection