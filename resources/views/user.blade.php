@extends('layouts.admin')



@section('container')
    <div class="container mt-5 ">

        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card p-4">
                    <img src="/assets/img/foto.png"
                        class="card-img-top" alt="...">
                    <div class="card-body">

                        <p class="card-text text-center m-4 " style="font-size: 35px">Nama :{{  $user->nama }}</p>
                        <p class="card-text text-center m-4 " style="font-size: 35px">Telpon :{{  $user->telpon }}</p>
                        <p class="card-text text-center  m-4 " style="font-size: 35px">Alamat :{{  $user->alamat }}</p>
                        <p class="card-text text-center  m-4 " style="font-size: 35px">Email :{{  $user->email }}</p>


                    </div>

                </div>
                <a href="/users" type="button" class="btn btn-dark btn-lg mt-4"> kembali</a>


            </div>
        </div>



    </div>
@endsection

