@extends('layout/admin/index')
@section('content')
    <div>
        <div class="card p-4 d-flex text-center justify-content-center align-items-center">
            <h1>{{ $pengumuman->title }}</h1>
            <img class="img-fluid text-center" src="/storage/pengumuman/{{ $pengumuman->gambar_pengumuman }}" alt="" srcset=""
                style="max-width: 500px">
            {!! $pengumuman->body !!}

        </div>
        <div>
            <a href="/admin/pengumuman" class="btn btn-warning mt-2">Back</a>
        </div>
    </div>
@endsection
