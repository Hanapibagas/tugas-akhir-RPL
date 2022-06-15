@extends('backend.layout.index')

@section('content')
<form action="{{ route('update-pengurus' , $positions->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="floatingInput">Nama Pengurus</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="floatingInput"
            placeholder="Silahkan isi..." name="name" value="{{ $positions->name }}">
            @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="floatingInput">Nomor Induk Mahasiswa</label>
        <input type="text" class="form-control @error('n_induk') is-invalid @enderror" id="floatingInput"
            placeholder="Silahkan isi..." name="n_induk" value="{{ $positions->n_induk }}">
            @error('n_induk')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="floatingInput">Jabatan Pengurus</label>
        <input type="text" class="form-control @error('position') is-invalid @enderror" id="floatingInput"
            placeholder="Silahkan isi..." name="position" value="{{ $positions->position }}">
            @error('position')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="floatingInput">Foto Pengurus</label><br>
        <small>Pilih gambar jika ingin mengubah</small>
        <input type="file" value="{{  $positions->picture }}" class="form-control" id="floatingInput" placeholder="Foto" name="picture">
        @if ( $positions->picture )
        <img src="{{ asset ('storage/' .$positions->picture) }}" alt="hello" class="mt-3" width="100px" height="100px">
        @endif
    </div>
    <button type="submit" class="btn btn-primary">
        Perbarui
    </button>
</form>
@endsection
