@extends('templete.html')

@section('conten')
    <div class="row">
        <div class="col mt-5">
            <h1 class="border-bottom">Menu Create data</h1>
        </div>
    </div>
    <div class="row">
        <form >
            <div class="col-5 mb-3 mt-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" id="name" class="form-control">
            </div>
            <div class="col-5 mb-3 mt-3">
                <label for="judul" class="form-label">judul</label>
                <input type="text" id="judul" class="form-control">
            </div>
            <div class="col-5 mb-3 mt-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <input type="text" id="deskripsi" class="form-control">
            </div>
            <div class="d-grid col-5 mb-3 mt-3">
                <button type="submit" class="btn btn-outline-dark">Create data</button>
            </div>
        </form>
    </div>
@endsection