@extends('templete.html')

@section('conten')
    <div class="row mt-4 border-bottom">
        <div class="col">
            <h1>Notes about
                @if(request('search')) 
                    <i> {{request('search')}} </i></h1>
                @else
                    <i>All</i>
                @endif
        </div>
    </div>
    <div class="row">
        <form action="">
            <div class=" input-group mt-4 mb-3">
                <input type="text" name="search" class="form-control" placeholder="Search Text" aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{ request('search') }}">
                <button type="submit" class="input-group-text" id="basic-addon2">Search</button>
            </div>
        </form>
    </div>
    @if ($data->count())
        <div class="row">
            <div class="col">
                @if (request('search'))
                    <p style="color : #bbb;">the title you get as much {{$data->count()}}</p>
                @endif
            </div>
        </div>
        @foreach ($data as $result)
            <div class="row mt-4">
                <div class="col p-4 border border-1 shadow rounded-3">
                    <h3> {{ $result->judul }} </h3>
                    <p style="color: #bbb" >{{$result->deskripsi }} </p>
                    <a class="btn btn-outline-dark" href="/detil/{{$result->slug}} ">Lihat detail</a>
                </div>
            </div>
        @endforeach
    @else
        <p class="text-center" style="
        color: #bbb;
        font-size: 30px;"
        >the title you are looking for does not exist</p>        
    @endif

    
    
    
    
@endsection