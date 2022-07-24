@extends('layouts.admin')

@section('container')
    <div class="container">
        <div id="carouselExampleControls" class="carousel slide col-lg-8 col-md-6 offset-lg-2 offset-md-3"
            data-bs-ride="carousel">
            <div class="carousel-inner ">
                <div class="carousel-item active ">
                    <img src="/assets/img/wanita.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/assets/img/dongker.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/assets/img/warnawarni.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


    </div>
    <section id="kontak" class="mt-5">
        <div class="container">
            <div class="row ">
                <h1 class="text-center">Tentang Kami</h1>
                <div class="col ">
                    <div class="d-flex justify-content-center mt-3">
                        <img src="/assets/img/logo.png" alt="" style="width:300px;">
                    </div>
                    <div class="d-flex justify-content-center mt-2 ">
                        <h6 class="fs-7 col-7" style="text-align:center">Studio Karya adalah sebuah website yang digunakan untuk pameran seni secara online,
                            sehingga
                            untuk melihat karya seniman tidak lagi harus dapat secara offfline</h6>
                    </div>
                </div>
            </div>
        </div>






        </div>
        </div>
    </section>
@endsection
