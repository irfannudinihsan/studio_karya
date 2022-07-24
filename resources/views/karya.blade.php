@extends('layouts.admin')


@section('container')
    <div class="container mt-5 ">

        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card p-4">
                    <img src="{{ asset('storage/' . $karya->image) }}" class="card-img-top mt-3" alt="...">
                    <div class="card-body">
                        <h1 class="card-title text-center">{{ $karya->judul }}</h1>
                        <p class="card-text text-center m-4 " style="font-size: 35px">{{ $karya->media }}</p>
                        <p class="card-text text-center m-4 " style="font-size: 35px">{{ $karya->ukuran }}</p>
                        <p class="card-text text-center  m-4 " style="font-size: 35px">{{ $karya->tahun }}</p>
                        <p class="card-text text-center  m-4 " style="font-size: 25px">{{ $karya->deskripsi }}</p>

                        <h4 class="">Seniman : {{ $karya->user->nama }}</h4>
                        <h4 class="">Kategori : {{ $karya->category->nama }}</h4>
                    </div>

                </div>
                <a href="/karyas" type="button" class="btn btn-dark btn-lg mt-4"> kembali</a>


            </div>
        </div>



    </div>
@endsection
