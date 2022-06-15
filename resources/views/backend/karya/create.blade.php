@extends('backend.layout.index')

@section('content')
<form action="{{ route('tambah-karya') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="floatingInput">Judul</label>
        <input type="text" class="form-control @error('cover') is-invalid @enderror" id="floatingInput"
            placeholder="Silahkan isi..." name="cover">
            @error('cover')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="floatingInput">Deskripsi</label>
        <input type="text" class="form-control @error('description') is-invalid @enderror" id="floatingInput"
            placeholder="Silahkan isi..." name="description">
            @error('description')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="floatingInput">Link</label>
        <input type="text" class="form-control @error('link') is-invalid @enderror" id="floatingInput"
            placeholder="Silahkan isi..." name="link">
            @error('link')
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
