@extends('layout/admin/index')

@section('content') 
    @if (session()->has('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif

    <div class="card p-4">
        <h1 class="text-dark fs-3 mb-4">Buat Album</h1>
        <form action="/admin/foto/add-foto" method="POST" enctype="multipart/form-data" >
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Judul</label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" required>
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <p>Upload Foto</p>
            <div class="input-group mb-3">
                <input type="file"  class="form-control" id="foto" name="foto"  accept="image/png, image/jpeg, image/jpg" required>
                <label class="input-group-text" for="foto" >Upload</label>
                @error('gambar')
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
            <div class="mb-3">
                <p>Pengahargaan / Prestasi</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="penghargaan" id="flexRadioDefault1" value="yes">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Yes
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="penghargaan" id="flexRadioDefault2" value="no" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                      No
                    </label>
                  </div>
            </div>

            <a href="/admin/foto" class="btn btn-warning mt-2">Back</a>
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
