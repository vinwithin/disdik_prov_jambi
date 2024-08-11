@extends('layout/admin/index')
@section('content')
<style>
    input[type="url"] {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
</style>
    @if (session()->has('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif
    <div class="card p-4">
        <h1 class="text-dark fs-3 mb-4">Edit Album</h1>
        <form action="/admin/video/edit-video/{{$video->slug}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Judul</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{$video->title}}"  required
                    >
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="input-group mb-3">
                <label for="link_video">Enter a video URL:</label>
                <input type="url" id="link_video" name="link_video" value="{{$video->link_video}}">
                @error('link_video')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <a href="/admin/video" class="btn btn-warning mt-2">Back</a>
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>
    <script>
        const trixEditor = document.getElementById('id1');
        addEventListener('trix-blur', (event)=> {
            @this.set('body', trixEditor.getAttribute('value'))
           
        });
    </script>

@endsection


