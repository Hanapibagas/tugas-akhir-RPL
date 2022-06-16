@extends('backend.layout.index')

@section('content')
<form action="{{ route('edit-karya', $creations->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="floatingInput">Judul</label>
        <input type="text" class="form-control @error('cover') is-invalid @enderror" id="floatingInput"
            placeholder="Silahkan isi..." name="cover" value="{{ $creations->cover }}">
            @error('cover')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="floatingInput">Deskripsi</label>
        <input type="text" class="form-control @error('description') is-invalid @enderror" id="floatingInput"
            placeholder="Silahkan isi..." name="description" value="{{ $creations->description }}">
            @error('description')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="floatingInput">Link</label>
        <input type="text" class="form-control @error('link') is-invalid @enderror" id="floatingInput"
            placeholder="Silahkan isi..." name="link" value="{{ $creations->link }}">
            @error('link')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="floatingInput">Gambar</label><br>
        <small>Pilih gambar jika ingin mengubah</small>
        <input type="file" value="{{  $creations->picture }}" class="form-control" id="floatingInput" placeholder="Foto" name="picture">
        @if ( $creations->picture )
        <img src="{{ asset ('storage/' .$creations->picture) }}" alt="hello" class="mt-3" width="100px" height="100px">
        @endif
    </div>
    <button type="submit" class="btn btn-primary">
        Kirim
    </button>
</form>
@endsection
