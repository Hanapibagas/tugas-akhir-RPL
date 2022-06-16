@extends('backend.layout.index')

@section('content')

@if (session('status'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Sukses!',
        text : "{{ session('status') }}",
    });
</script>
@endif
<div class="row">
    <a href="{{ route('create-history') }}" class="btn btn-primary">Tambah</a>
</div>
<table class="table mt-3">
    <thead>
        <tr>
            <th scope="col">No.</th>
            <th scope="col">Judul</th>
            <th scope="col">Gambar</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($histories as $key => $item)
        <tr>
            <th scope="row">{{ $key+1 }}</th>
            <td>{{ $item->title }}</td>
            <td><img width="50px" height="70px" src="{{ asset ('storage/'.$item->picture) }}" alt="fesfh"></td>
            <td>
                <a href="{{ route('edit-history', $item->id) }}" class="btn btn-primary">Edit</a>
                <form style="display: inline" action="{{ route('destroy-history', $item->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        <tr>
            @endforeach
</table>
@endsection
