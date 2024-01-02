@extends('layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Pembayaran </h1>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-primary" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            
            <a href="/pembayaran/create" class="btn btn-primary mb-3">Bayar</a>
            <a href="/pembayaran-export" class="btn btn-primary mb-3 ms-1" >Print Data Excell</a>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Member</th>
                    <th scope="col">Tanggal Bayar</th>
                    <th scope="col">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pembayarans as $pembayaran)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $pembayaran->members['name'] }}</td>
                        <td>{{ $pembayaran->tanggal_bayar }}</td>
                        <td>{{ $pembayaran->keterangan }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
