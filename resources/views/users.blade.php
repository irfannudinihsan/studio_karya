@extends('layouts.admin')

@section('container')
    <div class="container mt-5">

        <div class="row">
            @foreach ($users as $user)
                <div class="col-md-3 mt-5 ">
                    <div class="card p-2">

                        <img src="/assets/img/foto.png"
                            class="card-img-top" alt="...">

                        <h1 class="text-center mt-3">{{ $user->nama }}</h1>

                        <div class="row">
                            <div class="col-6 text-center mt-3 "><a href="/users/{{ $user->slug }}">
                                    <h4>profile</h4>
                                </a></div>

                            <div class="col-6 text-center mt-3 "> <a href="/userkarya/{{ $user->slug }}">
                                    <h4>karya</h4>
                                </a></div>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
@endsection


{{-- <div class="row">
        @foreach ($users as $user)
            <div class="col">
                <h2>{{ $user->nama }}</h2>
            </div>
    </div>
    <div class="row">

        <div class="col">
            <a href="/users/{{ $user->slug }}">
                <h5>profile</h5>
            </a>
        </div>
        <div class="col">

            <a href="/userkarya/{{ $user->slug }}">karyanya</a>
        </div>

    </div>
    @endforeach --}}
