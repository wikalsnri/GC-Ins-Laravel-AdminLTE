@extends('template')

@section('konten')
    <div class="container">
        <h2>Tambah Pemain Film Baru</h2>

        @if($errors->any())
            <div class="alert alert-danger">
                 <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ url('/cast') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="umur">Umur:</label>
                <input type="text" class="form-control" id="umur" name="umur" required>
            </div>
            <div class="form-group">
                <label for="bio">Bio:</label>
                <input type="text" class="form-control" id="bio" name="bio" required>
            </div>


            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection