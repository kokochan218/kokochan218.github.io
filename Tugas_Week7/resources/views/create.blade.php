@extends('layout')

@section('content')
    <h1>Tambah Buku</h1>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <input type="text" name="judul" placeholder="Judul Buku" required>
        <input type="text" name="penulis" placeholder="Penulis" required>
        <input type="number" name="tahun_terbit" placeholder="Tahun Terbit" required>
        <input type="text" name="genre" placeholder="Genre" required>
        <button type="submit">Simpan</button>
    </form>
@endsection