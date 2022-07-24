@extends('layouts.admin')

@section('container')
    <div class="row justify-content-center " style="margin-top: 200px">

        <div class="col-md-4">

            <main class="form-registration w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal text-center">Registrasi</h1>

                <form action="/register" method="post">
                    @csrf
                    <div class="form-floating m-3">
                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror " id="nama" placeholder="nama" required value="{{ old('nama') }}">
                        <label for="nama"  >Nama</label>
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror


                    </div>
                    <div class="form-floating m-3">
                        <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug" placeholder="nama user" required value="{{ old('slug') }}">
                        <label for="slug">Nama User</label>
                        @error('slug')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating m-3">
                        <input type="text" name="telpon" class="form-control @error('telpon') is-invalid @enderror" id="telpon" placeholder="telpon" required value="{{ old('telpon') }}">
                        <label for="telpon">Telpon</label>
                        @error('telpon')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating m-3">
                        <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="alamat" required value="{{ old('alamat') }}">
                        <label for="alamat">Alamat</label>
                        @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating m-3">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="email" required value="{{ old('email') }}">
                        <label for="email">Email</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating m-3">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required value="{{ old('password') }}">
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button class="w-100 btn btn-lg btn-dark" type="submit">Submit</button>

                </form>
            </main>


        </div>
    </div>
@endsection
