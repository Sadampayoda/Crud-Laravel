@extends('templete.html')

@section('conten')
    <div class="row mt-4 border-bottom">
        <div class="col">
            <h1>Catatan All</h1>
        </div>
    </div>
    @if ($data == null)
        <p class="text-center" style="color: #bbb">Data masih kosong</p>        
    @endif
    @foreach ($data as $result)
        <div class="row mt-4">
            <div class="col p-4 border border-1 shadow rounded-3">
                <h3> {{ $result->judul }} </h3>
                <p style="color: #bbb" >{{$result->deskripsi }} </p>
                <a class="btn btn-outline-dark" href="/detil/{{$result->slug}} ">Lihat detail</a>
            </div>
        </div>
    @endforeach
    
    
@endsection