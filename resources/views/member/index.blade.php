@extends('layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Member </h1>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-primary" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <a href="/member/create" class="btn btn-primary mb-3">Tambah Member</a>
            <a href="/member-export" class="btn btn-primary mb-3 ms-1">Print Data Excell</a>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Member</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Nomor Telepon</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($members as $member)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $member->name }}</td>
                        <td>{{ $member->umur }}</< /td>
                        <td>{{ $member->alamat }}</< /td>
                        <td>{{ $member->no_tel }}</< /td>
                        <td>
                            <form action="{{ route('member.destroy', $member) }}" method="POST">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0"
                                    onclick="return confirm('Ingin Menghapus member ?')"><span
                                        data-feather="delete"></span>Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
