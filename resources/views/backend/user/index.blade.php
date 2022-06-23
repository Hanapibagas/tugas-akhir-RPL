@extends('backend.layout.index')

@section('content')
<table class="table mt-3">
    <thead>
        <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama</th>
            <th scope="col">Npm</th>
            <th scope="col">Jabatan</th>
            <th scope="col">Foto</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        {{-- @foreach ($positions as $key => $item)
        <tr>
            <th scope="row">{{ $key+1 }}</th>
            <td>{{ $item->name }}</td>
            <td>{{ $item->n_induk }}</td>
            <td>{{ $item->position }}</td>
            <td><img width="50px" height="70px" src="{{ asset ('storage/'.$item->picture) }}" alt="fesfh"></td>
            <td>
                <a href="{{ route('edit-pengurus', $item->id) }}" class="btn btn-primary">Edit</a>
                <form style="display: inline" action="{{ route('destroy-pengurus', $item->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        <tr>
            @endforeach --}}
</table>
@endsection
