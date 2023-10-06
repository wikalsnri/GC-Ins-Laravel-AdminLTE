@extends('template')

@section('konten')
    <div class="container">
        <h2>Daftar Pemain Film</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ url('/cast/create') }}" class="btn btn-primary mb-3">Tambah Pemain Film</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Bio</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($casts as $cast)
                    <tr>
                        <td>{{ $cast->id }}</td>
                        <td>{{ $cast->nama }}</td>
                        <td>{{ $cast->umur }}</td>
                        <td>{{ $cast->bio }}</td>
                        <td>
                            <a href="{{ url('/cast/' . $cast->id) }}" class="btn btn-info">Detail</a>
                            <a href="{{ url('/cast/' . $cast->id . '/edit') }}" class="btn btn-warning">Edit</a>
                            <form action="{{ url('/cast/' . $cast->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection