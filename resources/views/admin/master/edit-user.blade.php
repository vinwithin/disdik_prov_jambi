@extends('layout/admin/index')
@section('content')
    @if (session()->has('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif
    <div class="card p-4">
        <h1 class="text-dark fs-3 mb-4">Edit Pengumuman</h1>
        <form action="/admin/master/edit-user/{{ $user->id }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" value="{{$user->name}}" required>
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{$user->email}}" required>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" required>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <p>Level</p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="level" id="flexRadioDefault1" value="1"
                    {{ old('level', $user->level) == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="flexRadioDefault1">
                      Superadmin
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="level" id="flexRadioDefault2" value="2"
                    {{ old('level', $user->level) == 2 ? 'checked' : '' }}>
                    <label class="form-check-label" for="flexRadioDefault2">
                      Admin
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="level" id="flexRadioDefault3" value="3"
                    {{ old('level', $user->level) == 3 ? 'checked' : '' }}>
                    <label class="form-check-label" for="flexRadioDefault3">
                      User
                    </label>
                  </div>
            </div>

            <a href="/admin/master" class="btn btn-warning mt-2">Back</a>
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>
    <script>
        const trixEditor = document.getElementById('id1');
        addEventListener('trix-blur', (event) => {
            @this.set('body', trixEditor.getAttribute('value'))

        });
    </script>
@endsection
