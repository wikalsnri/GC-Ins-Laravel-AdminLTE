@extends('template')

@section('konten')
    <div class="container">
        <h2>Edit Pemain Film</h2>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ url('/cast/' . $cast->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $cast->nama }}" required>
            </div>
            <div class="form-group">
                <label for="umur">Umur:</label>
                <input type="number" class="form-control" id="umur" name="umur" value="{{ $cast->umur }}" required>
            </div>
            <div class="form-group">
                <label for="bio">Bio:</label>
                <input type="text" class="form-control" id="bio" name="bio" value="{{ $cast->bio }}" required>
            </div>


            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
@endsection