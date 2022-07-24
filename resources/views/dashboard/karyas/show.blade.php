@extends('dashboard.layouts.main')


@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">

                <br>

                <a href="/dashboard/karyas" class="btn btn-success"><span data-feather="arrow-left"
                        class="align-text-bottom"></span>kembali</a>
                        <a href="/dashboard/karyas/{{ $karya->slug }}/edit" class="btn btn-warning"><span data-feather="edit"
                            class="align-text-bottom"></span>edit</a>
                <form action="/dashboard/karyas/{{ $karya->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger " onclick="return confirm('yang bener?')"> <span
                            data-feather="x-circle"></span>Hapus</button>
                </form>


                <img src="{{ asset('storage/' . $karya->image ) }}"
                        class="card-img-top mt-3" alt="...">
                <h4>Kategori : {{ $karya->category->nama }}</h4>
                <h2>{{ $karya->judul }}</h2>
                <h4>{{ $karya->media }}</h4>
                <h4>{{ $karya->ukuran }}</h4>
                <h4>{{ $karya->tahun }}</h4>

                <article class="my-3 fs-5">
                    {!! $karya->deskripsi !!}
                </article>



                <a href="/posts">back</a>
            </div>
        </div>
    </div>
@endsection
