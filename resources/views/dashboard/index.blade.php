@extends('dashboard.layouts.main')


@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome, {{ auth()->user()->nama }}</h1>
    </div>

    <div class="container-fluid">
        <div class="row">
            <h3>Kategory</h3>
            @foreach ($categories as $category)
                <div class="col-md-3 mt-2">
                    <div class="card p-2 border border-0" style="background-color: #FAF3E3">
                        <img src="https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2021/03/28/2687008907.jpg "
                            class="card-img-top" alt="...">
                        <div class="card-body">


                            <h3  class=" d-flex justify-content-center text-light p-2"
                                style="background-color: #1A4D2E; border-radius:10;" >
                             {{ $category->nama }}
                            </h3>

                        </div>

                    </div>
                </div>
            @endforeach

        </div>
        <div class="row mt-4">
            <h3>Seniman</h3>
            @foreach ($users as $user)
                <div class="col-md-3 mt-2">
                    <div class="card p-2 border border-0" style="background-color: #FAF3E3">
                        <img src="https://www.gramedia.com/blog/content/images/2021/03/5cae3e24d4206005f509a87a.png "
                            class="card-img-top" alt="...">
                        <div class="card-body">

                            <h3  class=" d-flex justify-content-center text-light p-2"
                                style="background-color: #1A4D2E; border-radius:10;" >
                             {{ $user->nama }}
                            </h3>

                        </div>

                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
