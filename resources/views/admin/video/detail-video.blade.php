@extends('layout/admin/index')
@section('content')
    <div>
        <div class="card p-4 d-flex text-center justify-content-center align-items-center">
            <h1>{{ $video->title }}</h1>
            {!! Embed::make($video->link_video)->parseUrl()->getIframe() !!}
            
           

        </div>
        <div>
            <a href="/admin/video" class="btn btn-warning mt-2">Back</a>
        </div>
    </div>

    
@endsection
