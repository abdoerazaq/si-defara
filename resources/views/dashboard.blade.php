@extends('layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
    </div>
    <div class="container text-center">
        <div class="row align-items-start">
            <div class="col">
                <div class="card mt-5 bg-secondary" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Total Member</h5>
                        <h4>{{ $member }}</h4>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mt-5 bg-primary" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Total Pembayaran</h5>
                        <h4>{{ $pembayaran }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 mt-5">Alur Menjadi Member</h1>
    </div>
    <header class="masthead text-white text-center" id="about">
        <div class="container bg-secondary">
            <img src="assets/img/daftar.png" class="img-fluid" alt="...">
        </div>
    </header>
@endsection
