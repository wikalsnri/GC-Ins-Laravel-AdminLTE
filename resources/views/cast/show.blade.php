@extends('template')

@section('konten')
    <div class="container">
        <h2>Detail Pemain Film</h2>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Nama: {{ $cast->nama }}</h5>
                <p class="card-text">Umur: {{ $cast->umur }}</p>
                <p class="card-text">Bio: {{ $cast->bio }}</p>
   
                
                <a href="{{ url('/cast') }}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
@endsection