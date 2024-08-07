@extends('layout/admin/index')
@section('content')
    <div>
        <div class="card p-4 d-flex ">
            <h1>{{ $hukum->title }}</h1>
            <iframe src="/storage/prod-hukum/{{$hukum->dokumen}}" width="100%" height="500px"></iframe>

            

        </div>
        <div>
            <a href="/admin/prod-hukum" class="btn btn-warning mt-2">Back</a>
        </div>
    </div>
@endsection
