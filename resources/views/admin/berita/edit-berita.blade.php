@extends('layout/admin/index')
@section('content')
    @if (session()->has('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif
    <div class="card p-4">
        <h1 class="text-dark fs-3 mb-4">Edit Berita</h1>
        <form action="/admin/berita/edit-berita/{{$berita->id}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Judul</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{$berita->title}}"  required
                    >
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
                <input id="id1" type="hidden" value="{{$berita->body}}"  name="body" required>
                <trix-editor class="trix-content" input="id1"  ></trix-editor>
            </div>
            <div class="input-group mb-3">
                <input type="file" class="form-control @error('image_berita') is-invalid @enderror" id="image_berita"
                      name='gambar' accept="image/png, image/jpeg, image/jpg" required>
                <label class="input-group-text" for="image_berita">Upload</label>
                @error('image_berita')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <p>Slide</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="slide" id="flexRadioDefault1" value="yes">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Yes
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="slide" id="flexRadioDefault2" value="no" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                      No
                    </label>
                  </div>
            </div>
            <a href="/admin/berita" class="btn btn-warning mt-2">Back</a>
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


