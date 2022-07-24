@extends('layouts.admin')

@section('container')
    <div class="container">
        <div class="col-md-4">
            <form action="/karyas">
                <div class="input-group ">
                    <input type="text" class="form-control" placeholder="cari.." name="cari" value="{{ request('cari') }}">
                    <button class="btn btn-dark" type="submit">cari</button>
                </div>
            </form>
        </div>
        <div class="row">
            @foreach ($karyas as $karya)
                <div class="col-md-6 col-lg-4 mt-4">
                    <div class="card p-2" style="">

                        <div class="position-absolute  px-3 py-2 " style="background-color: rgba(0,0,0,0.4)">
                            <a href="" class="text-white text-decoration-none">{{ $karya->category->nama }}</a>
                        </div>

                        <img src="{{ asset('storage/' . $karya->image) }}" class="card-img-top mt-3" alt="...">
                        <div class="card-body">
                            <h2 class="card-title text-center">{{ $karya->judul }}</h2>
                            <p class="card-text text-center " style="font-size: 22px">{{ $karya->media }}</p>
                            <p class="card-text text-center" style="font-size: 22px">{{ $karya->ukuran }}</p>
                            <p class="card-text text-center" style="font-size: 22px">{{ $karya->tahun }}</p>

                            <h6 class="">Seniman : {{ $karya->user->nama }}</h6>
                        </div>

                        <a href="/karyas/{{ $karya->slug }}">
                            <h5 class="px-3" align='right'>detailnya</h5>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
