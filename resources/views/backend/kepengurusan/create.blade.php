@extends('backend.layout.index')

@section('content')
<form action="{{ route('store-pengurus') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="floatingInput">Nama Pengurus</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="floatingInput"
            placeholder="Silahkan isi..." name="name">
            @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="floatingInput">Nomor Induk Mahasiswa</label>
        <input type="text" class="form-control @error('n_induk') is-invalid @enderror" id="floatingInput"
            placeholder="Silahkan isi..." name="n_induk">
            @error('n_induk')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="floatingInput">Jabatan pengurus</label>
        <input type="text" class="form-control @error('position') is-invalid @enderror" id="floatingInput"
            placeholder="Silahkan isi..." name="position">
            @error('position')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="floatingInput">Foto pengurus</label>
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
