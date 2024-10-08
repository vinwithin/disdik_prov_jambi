@extends('layout/admin/index')
@section('content')
    @if (session()->has('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif
    <div class="card p-4">
        <h1 class="text-dark fs-3 mb-4">Edit Pengumuman</h1>
        <form action="/admin/prod-hukum/edit-prod-hukum/{{ $hukum->slug }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Judul</label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" value="{{$hukum->title}}" required>
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="category_prod_hukum_id" class="form-label">Kategori</label>
                <select class="form-select" name="category_prod_hukum_id" id="category_prod_hukum_id" required>
                    <option value="" selected="selected" hidden="hidden">Pilih Kategori</option>
                    @foreach ($category_prod_hukum as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="nomor" class="form-label">Nomor</label>
                <input type="text" name="nomor" class="form-control @error('nomor') is-invalid @enderror" id="nomor" value="{{$hukum->nomor}}" required>
                @error('nomor')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="tentang" class="form-label">Tentang</label>
                <input type="text" name="tentang" class="form-control @error('tentang') is-invalid @enderror" id="tentang"  value="{{$hukum->tentang}}">
                @error('tentang')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
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

            <div class="mb-3">
                <label for="terbit" class="form-label">Terbit</label>
                <input type="date" name="terbit" class="form-control @error('terbit') is-invalid @enderror" id="terbit" value="{{$hukum->terbit}}" required>
                @error('terbit')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            

            <a href="/admin/prod-hukum" class="btn btn-warning mt-2">Back</a>
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>
    
@endsection
