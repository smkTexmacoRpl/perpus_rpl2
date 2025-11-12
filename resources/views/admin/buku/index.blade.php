@extends('layouts.dash')
@section('content')
<div class="card mt-4">
    <div class="card-header">Daftar Buku</div>
    <div class="card-body">
        <div class="table-responsive">
            <a href="{{ route('buku.create') }}" class="btn btn-success mb-3">Tambah Buku</a>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID Buku</th>
                        <th>Judul</th>
                        <th>Pengarang</th>
                        <th>Kategori</th>
                        <th>Tahun Terbit</th>
                        <th>Cover</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bukus as $buku)
                    <tr>
                        <td>{{ $buku->id }}</td>
                        <td>{{ $buku->judul }}</td>
                        <td>{{ $buku->pengarang }}</td>
                        <td>{{ $buku->kategori->nama_kategori }}</td>
                        <td>{{ $buku->tahun_terbit }}</td>
                        <td>
                            @if($buku->cover)
                            <img src="{{ asset('/storage/buku/' . $buku->cover) }}" alt="Cover" width="50">
                            @else
                            N/A
                            @endif
                        </td>

                        <td>
                            <!-- Add action buttons here, e.g., Edit, Delete -->
                            <a href="{{ route('buku.edit', $buku->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('buku.destroy', $buku->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection