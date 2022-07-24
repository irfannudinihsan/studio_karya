@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Buat Karya edit</h1>
    </div>

    <div class="col-lg-8">

        <form method="post" action="/dashboard/karyas/{{ $karya->slug }}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul"
                    required autofocus value="{{ old('judul', $karya->judul) }}">
                @error('judul')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"
                    required autofocus value="{{ old('slug', $karya->slug) }}">
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>



            <div class="mb-3">
                <label for="image" class="form-label">Post Image</label>
                <input type="hidden" name="oldImage" value="{{ $karya->image }}">
                @if ($karya->image)
                    <img src="{{ asset('storage/' . $karya->image) }}" alt="">
                @else
                    <img class="img-preview" src="" alt="" img-fluid>
                @endif

                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                    name="image" onchange="previewImage()">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" name="category_id">
                    @foreach ($categories as $category)
                        @if (old('category_id', $karya->category_id) == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->nama }}</option>
                        @endif
                        <option value="{{ $category->id }}" selected>{{ $category->nama }}</option>
                    @endforeach
                </select>
            </div>


            <div class="mb-3">
                <label for="media" class="form-label">Media</label>
                <input type="text" class="form-control @error('media') is-invalid @enderror" id="media"
                    name="media" required autofocus value="{{ old('media', $karya->media) }}">
                @error('media')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="ukuran" class="form-label">Ukuran</label>
                <input type="text" class="form-control @error('ukuran') is-invalid @enderror" id="ukuran"
                    name="ukuran" required autofocus value="{{ old('ukuran', $karya->ukuran) }}">
                @error('ukuran')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="tahun" class="form-label">Tahun</label>
                <input type="number" class="form-control @error('tahun') is-invalid @enderror" id="tahun"
                    name="tahun" required autofocus value="{{ old('tahun', $karya->tahun) }}">
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                @error('deskripsi')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <input id="deskripsi" type="hidden" name="deskripsi" value="{{ old('deskripsi', $karya->deskripsi) }}">
                <trix-editor input="deskripsi"></trix-editor>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

    <script>
        const judul = document.querySelector('#judul');
        const slug = document.querySelector('#slug');

        judul.addEventListener('change', function() {
            fetch('/dashboard/karya/checkSlug?judul=' + judul.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        document.addEventListener('trix-file-accept', function(e) {
            e.prevenDefault();
        })

        function previewImage() {

            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }

        }
    </script>
@endsection
