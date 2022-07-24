@extends('layouts.admin')


@section('container')
    <div class="container">
        <h1 class="mt-5">kategori : {{ $category }}</h1>
        <div class="row">

            @foreach ($karyas as $karya)
                <div class="col-md-6 col-lg-4 mt-4">
                    <div class="card p-2">
                        <div class="position-absolute  px-3 py-2 " style="background-color: rgba(0,0,0,0.4)">
                            <a href="" class="text-white text-decoration-none">{{ $karya->category->nama }}</a>
                        </div>

                        <img src="{{ asset('storage/' . $karya->image) }}" class="card-img-top mt-3" alt="...">
                        <div class="card-body">
                            <h2 class="card-title text-center">{{ $karya->judul }}</h2>
                            <p class="card-text text-center " style="font-size: 22px">{{ $karya->media }}</p>
                            <p class="card-text text-center" style="font-size: 22px">{{ $karya->ukuran }}</p>
                            <p class="card-text text-center" style="font-size: 22px">{{ $karya->tahun }}</p>
                            <p class="card-text text-center" style="font-size: 18px">{{ $karya->deskripsi }}</p>


                        </div>

                    </div>
                </div>
            @endforeach
        </div>
        <a href="/categories" type="button" class="btn btn-dark btn-lg mt-4"> kembali</a>

    </div>
@endsection








