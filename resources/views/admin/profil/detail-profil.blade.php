@extends('layout/admin/index')
@section('content')
    <div>
        <div class="card p-4 d-flex ">
            <h1>{{ $profil->title }}</h1>
            <img class="img-fluid text-center" src="/storage/profil/{{ $profil->image }}" alt="" srcset=""
                style="max-width: 500px">
            {!! $profil->body !!}
            

        </div>
        <div>
            <a href="/admin/profil" class="btn btn-warning mt-2">Back</a>
        </div>
    </div>
@endsection
