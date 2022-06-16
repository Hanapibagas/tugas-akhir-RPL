@extends('backend.layout.index')

@section('content')
<form action="{{ route('edit-history', $histories->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="floatingInput">Judul</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="floatingInput"
            placeholder="Silahkan isi..." name="title" value="{{ $histories->title }}">
            @error('title')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="floatingInput">Gambar</label><br>
        <small>Pilih gambar jika ingin mengubah</small>
        <input type="file" value="{{  $histories->picture }}" class="form-control" id="floatingInput" placeholder="Foto" name="picture">
        @if ( $histories->picture )
        <img src="{{ asset ('storage/' .$histories->picture) }}" alt="hello" class="mt-3" width="100px" height="100px">
        @endif
    </div>
    <button type="submit" class="btn btn-primary">
        Kirim
    </button>
</form>
@endsection
