@extends('dashboard.layouts.main')


@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Karya</h1>
    </div>

    @if (session()->has('sukses'))
        <div class="alert alert-success" role="alert">
            {{ session('sukses') }}
        </div>
    @endif

    <div class="table-responsive">
        <a href="/dashboard/karyas/create" class="btn  btn-dark table-bordered  mb-3 ">buat karya baru</a>
        <table class="table table-bordered  table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Media</th>
                    <th scope="col">Ukuran</th>
                    <th scope="col">Tahun</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($karyas as $karya)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $karya->judul }}</td>
                        <td>{{ $karya->media }}</td>
                        <td>{{ $karya->ukuran }}</td>
                        <td>{{ $karya->tahun }}</td>
                        <td>{{ $karya->category->nama }}</td>

                        <td>
                            <a class="badge bg-warning border-0" href="/dashboard/karyas/{{ $karya->slug }}"> <span data-feather="eye"
                                    class="align-text-bottom"></span></span></a>

                            <a class="badge bg-success border-0" href="/dashboard/karyas/{{ $karya->slug }}/edit"> <span data-feather="edit"
                                    class="align-text-bottom"></span></a>


                            <form action="/dashboard/karyas/{{ $karya->slug }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('yang bener?')"> <span
                                        data-feather="x-circle"></span></button>
                            </form>



                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
