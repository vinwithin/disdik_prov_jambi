@extends('layout/admin/index')
@section('content')
    
<div>
    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="d-flex justify-content-between mb-3">
        <h1 class=" text-dark fs-3">Profil</h1>
    </div>
   
        <div class="card p-3 shadow">
            <div class="table-responsive col-lg-10">
                <a href="/admin/profil/add-profil" class="btn btn-primary mb-3">Buat Profil</a>
                @if (count($profil) > 0)
                
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Cari..."
                            name="cari" wire:model="cari">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary" >
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                
                    </div>
                
                


                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($profil as $post)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <th>{{$post->title}}</th>
                            
                            <td>
                                <a href="/admin/profil/detail/{{$post->slug}}" class="badge bg-info"><i class="fa-regular fa-eye"></i></a>
                                <a href="/admin/profil/edit-profil/{{$post->slug}}" class="badge bg-warning"><i
                                        class="fa-regular fa-pen-to-square"></i></a>
                                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            
            </div>
            @else
                <div class="alert alert-light text-center" role="alert">
                    Tidak ada data!
                </div>
            @endif
            {{ $profil->links() }}
        </div>
        
    </div>    
 
    @endsection

