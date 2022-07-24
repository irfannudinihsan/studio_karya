@extends('layouts.admin')


@section('container')
    <div class="container">

        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-4 mt-5">
                    <div class="card p-2">
                        <img src="/assets/img/dongker.jpg"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h1 class="card-title text-center">{{ $category->nama }}</h1>

                            <a href="/categories/{{ $category->slug }}" type="button" class="btn btn-dark btn-lg d-flex justify-content-center">
                                Karya {{ $category->nama }}
                            </a>

                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

