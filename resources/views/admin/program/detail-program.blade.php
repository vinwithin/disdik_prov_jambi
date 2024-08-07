@extends('layout/admin/index')
@section('content')
    <div>
        <div class="card p-4 d-flex ">
            <h1>{{ $program->title }}</h1>
            {!! $program->body !!}

        </div>
        <div>
            <a href="/admin/program" class="btn btn-warning mt-2">Back</a>
        </div>
    </div>
@endsection
