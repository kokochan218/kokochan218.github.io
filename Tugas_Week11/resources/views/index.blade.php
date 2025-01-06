@extends('layout')

@section('content')
    <div class="container">
        <h1 class="mt-4">Daftar Artikel</h1>
        <a href="{{ route('artikels.create') }}" class="btn btn-primary">Tambah Artikel</a>
        @if (session('success'))
            <div class="alert alert-success mt-2">{{ session('success') }}</div>
        @endif
        <div class="card mt-4">
            <div class="card-body">
                @foreach ($artikels as $artikel)
                    <h5 class="card-title">{{ $artikel->judul }}</h5>
                    <p class="card-text">{{ $artikel->isi }}</p>
                    <p class="text-muted">Penulis: {{ $artikel->penulis }}</p>
                    <hr>
                @endforeach
            </div>
        </div>
    </div>
@endsection