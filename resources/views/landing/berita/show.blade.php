@extends('landing')

@section('konten')
    <div class="col-lg-9">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-bold">{{ $berita->judul }}</h5>
                <p class="card-text">
                    <center>
                        <img src="{{ url('storage/' . $berita->gambar) }}" width="50%" height="300">
                    </center>
                    {!! $berita->konten !!}
                </p>
            </div>
        </div>
    </div>
@endsection
