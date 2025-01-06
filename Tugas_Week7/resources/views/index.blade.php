@extends('layout')

@section('content')
    <h1>Daftar Buku</h1>
    <a href="{{ route('books.create') }}">Tambah Buku</a>
    <table>
        <tr>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Tahun Terbit</th>
            <th>Genre</th>
            <th>Aksi</th>
        </tr>
        @foreach ($books as $book)
            <tr>
                <td>{{ $book->judul }}</td>
                <td>{{ $book->penulis }}</td>
                <td>{{ $book->tahun_terbit }}</td>
                <td>{{ $book->genre }}</td>
                <td>
                    <a href="{{ route('books.edit', $book->id) }}">Edit</a>
                    <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection