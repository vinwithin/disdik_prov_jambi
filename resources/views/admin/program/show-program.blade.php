@extends('layout/admin/index')
@section('content')
    
<div>
    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="d-flex justify-content-between mb-3">
        <h1 class=" text-dark fs-3">Program</h1>
    </div>
   
        <div class="card p-3 shadow">
            <div class="table-responsive col-lg-10">
                {{-- <a href="/admin/program/add-program" class="btn btn-primary mb-3">Buat Program</a> --}}
                @if (count($program) > 0)
                
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
                        @foreach ($program as $post)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <th>{{$post->title}}</th>
                            
                            <td>
                                <a href="/admin/program/detail/{{$post->id}}" class="badge bg-info"><i class="fa-regular fa-eye"></i></a>
                                <a href="/admin/program/edit-program/{{$post->id}}" class="badge bg-warning"><i
                                        class="fa-regular fa-pen-to-square"></i></a>
                                {{-- <a href="" class="badge bg-danger" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal{{$post->id}}"><i class="fa-solid fa-trash-can"></i></a> --}}
                                {{-- Modal hapus --}}
                                {{-- <div class="modal fade" id="exampleModal{{$post->id}}" tabindex="-1" aria-labelledby="exampleModalLabel{{$post->id}}"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah anda yakin menghapus program ini?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Tidak</button>
                                                <a href="/admin/program/delete/{{$post->id}}" class="btn btn-primary">Iya</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
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
            {{ $program->links() }}
        </div>
        
    </div>    
 
    @endsection

