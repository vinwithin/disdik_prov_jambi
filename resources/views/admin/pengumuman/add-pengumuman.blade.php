@extends('layout/admin/index')

@section('content') 
    @if (session()->has('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif

    <div class="card p-4">
        <h1 class="text-dark fs-3 mb-4">Buat Pengumuman</h1>
        <form action="/admin/pengumuman/add-pengumuman" method="POST" enctype="multipart/form-data" >
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

            <div class="mb-3">
                <label for="body" class="form-label">Deskripsi</label>
                @error('body')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <input id="id1" name="body" type="hidden" required>
                <trix-editor class="trix-content" input="id1"  ></trix-editor>
            </div>

            
            <p>Upload Dokumen</p>
            <div class="input-group mb-3">
                <input type="file"  class="form-control" id="dokumen" name="dokumen"  required>
                <label class="input-group-text" for="dokumen" >Upload</label>
                @error('dokumen')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            

            <a href="/admin/pengumuman" class="btn btn-warning mt-2">Back</a>
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>
    {{-- <script>
        const trixEditor = document.getElementById('id1');
        addEventListener('trix-blur', (event)=> {
            @this.set('body', trixEditor.getAttribute('value'))
           
        });
    </script> --}}
@endsection
