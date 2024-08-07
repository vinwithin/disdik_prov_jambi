@extends('layout/admin/index')
@section('content')
    <div>
        <div class="card p-4 d-flex text-center justify-content-center align-items-center">
            <h1>{{ $foto->title }}</h1>
            <img class="img-fluid text-center" src="/storage/foto/{{ $foto->foto }}" alt="" srcset=""
                style="max-width: 500px">
           

        </div>
        <div>
            <a href="/admin/foto" class="btn btn-warning mt-2">Back</a>
        </div>
    </div>
@endsection
