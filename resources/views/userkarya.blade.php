@extends('layouts.admin')



@section('container')
    <div class="container">
        <div class="row">
            @foreach ($karyas as $karya)
                <div class="col-md-3 mt-5">

                    <div class="card p-2">

                        <div class="position-absolute  px-3 py-2 " style="background-color: rgba(0,0,0,0.4)">
                            <a href="" class="text-white text-decoration-none">{{ $karya->category->nama }}</a>
                        </div>

                        <div class="card-body">
                            <img src="{{ asset('storage/' . $karya->image) }}" class="card-img-top mt-3" alt="...">
                            <h2 class="card-title text-center">{{ $karya->judul }}</h2>
                            <p class="card-text text-center " style="font-size: 22px">{{ $karya->media }}</p>
                            <p class="card-text text-center" style="font-size: 22px">{{ $karya->ukuran }}</p>
                            <p class="card-text text-center" style="font-size: 22px">{{ $karya->tahun }}</p>
                            <p class="card-text text-center" style="font-size: 18px">{{ $karya->deskripsi }}</p>

                            <h6 class="">Seniman : {{ $karya->user->nama }}</h6>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
