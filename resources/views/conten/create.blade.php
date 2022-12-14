@extends('templete.html')

@section('conten')
    <div class="row">
        <div class="col mt-5">
            <h1 class="border-bottom">Menu Create data</h1>
        </div>
    </div>
    <div class="row">
        <form method="POST" action="/crud">
            @csrf
            <div class="col-5 mb-3 mt-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name')}}">
            </div>
            @error('name')
                <div class="col">
                    <p class="text-danger"> {{$message}} </p>
                </div>
            @enderror
            <div class="col-5 mb-3 mt-3">
                <label for="judul" class="form-label">judul</label>
                <input type="text" name="judul" id="judul" class="form-control" value="{{ old('judul') }}">
            </div>
            @error('judul')
                <div class="col">
                    <p class="text-danger"> {{$message}} </p>
                </div>
            @enderror
            <div class="col-5 mb-3 mt-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <input type="text" name="deskripsi" id="deskripsi" class="form-control" value="{{ old('deskripsi')}}">
            </div>
            @error('deskripsi')
                <div class="col">
                    <p class="text-danger"> {{$message}} </p>
                </div>
            @enderror
            <div class="d-grid col-5 mb-3 mt-3">
                <button type="submit"name="Create" class="btn btn-outline-dark">Create data</button>
            </div>
        </form>
    </div>

    
@endsection