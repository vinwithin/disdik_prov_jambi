@extends('layout/admin/index')
@section('content')
    @if (session()->has('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif
    <div class="card p-4">
        <h1 class="text-dark fs-3 mb-4">Edit Profil</h1>
        <form action="/admin/profil/edit-profil/{{ $profil->slug }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Judul</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                    name="title" value="{{ $profil->title }}" required>
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Deskripsi</label>
                @error('body')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <input id="id1" name="body" type="hidden" value="{{$profil->body}}"  required>
                <trix-editor class="trix-content" input="id1"  ></trix-editor>
            </div>

            <div class="input-group mb-3">
                <input type="file"  class="form-control" id="image" name="image"  accept="image/png, image/jpeg, image/jpg" required>
                <label class="input-group-text" for="image" >Upload</label>
                @error('gambar')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <a href="/admin/profil" class="btn btn-warning mt-2">Back</a>
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
    </script>
    <script>
        CKEDITOR.replace('editor', options);
    </script>
@endsection
