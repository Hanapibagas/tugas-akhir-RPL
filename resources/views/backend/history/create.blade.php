@extends('backend.layout.index')

@section('content')
<form action="{{ route('store-history') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="floatingInput">Judul</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="floatingInput"
            placeholder="Silahkan isi..." name="title">
            @error('title')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="floatingInput">Gambar</label>
        <input type="file" class="form-control @error('picture') is-invalid @enderror" id="floatingInput"
            placeholder="Silahkan isi..." name="picture">
        @error('picture')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">
        Kirim
    </button>
</form>
@endsection
