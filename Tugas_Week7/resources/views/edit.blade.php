@extends('layout')

@section('content')
    <h1>Edit Buku</h1>
    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="judul" value="{{ $book->judul }}" required>
        <input type="text" name="penulis" value="{{ $book->penulis }}" required>
        <input type="number" name="tahun_terbit" value="{{ $book->tahun_terbit }}" required>
        <input type="text" name="genre" value="{{ $book->genre }}" required>
        <button type="submit">Update</button>
    </form>
@endsection