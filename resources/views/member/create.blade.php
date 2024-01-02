@extends('layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Member Baru </h1>
    </div>
    <div class="col-lg-8">
        <form action="/member" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Member</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="umur" class="form-label">Umur</label>
                <input type="number" class="form-control" id="umur" name="umur">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat">
            </div>
            <div class="mb-3">
                <label for="no_tel" class="form-label">No Telepon</label>
                <input type="text" class="form-control" id="no_tel" name="no_tel">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
