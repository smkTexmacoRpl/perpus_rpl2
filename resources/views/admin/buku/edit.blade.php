@extends('layouts.dash')
@section('content')
<div class="row">
 <div class="col-md-8 offset-md-2">

  <div class="card mt-4">
   <div class="card-header">Edit Buku</div>
   <div class="card-body">
    <form action="{{ route('buku.update', $buku->id) }}" method="POST" enctype="multipart/form-data">
     @csrf
     @method('PUT')
     <div class="mb-3">
      <label for="id_kategori" class="form-label">Kategori</label>
      <select class="form-select" id="id_kategori" name="id_kategori" required>
       <option value="" disabled selected>Pilih Kategori</option>
       @foreach($kategoris as $kategori)
       <option value="{{ $kategori->id }}" {{ old('id_kategori', $buku->id_kategori) == $kategori->id ? 'selected' : '' }}>
        {{ $kategori->nama_kategori }}
       </option>
       @endforeach
      </select>
     </div>
     <div class="mb-3">
      <label for="judul" class="form-label">Judul</label>
      <input type="text" class="form-control" id="judul" name="judul" value="{{ $buku->judul }}" required>
     </div>
     <div class="mb-3">
      <label for="pengarang" class="form-label">Pengarang</label>
      <input type="text" class="form-control" id="pengarang" name="pengarang" value="{{ $buku->pengarang }}" required>
     </div>

     <div class="mb-3">
      <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
      <input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit" value="{{ $buku->tahun_terbit }}"
       required>
     </div>
     <div class="mb-3">
      <label for="deskripsi" class="form-label">Deskripsi</label>
      <textarea class="form-control" id="deskripsi" name="deskripsi" required>{{$buku->deskripsi}}</textarea>

     </div>
     <div class="mb-3">
      <label for="stok" class="form-label">Jumlah Buku</label>
      <input type="number" class="form-control" id="stok" name="stok" value="{{ $buku->stok }}">

     </div>
     <div class="mb-3">
      <label for="cover" class="form-label">Cover</label>
      <input type="file" class="form-control" id="cover" name="cover">
      @if($buku->cover)
      <img src="{{ asset('storage/buku/'.$buku->cover) }}" width="25%" height="auto" class="mt-2">

      @else
      tidak ada gambar
      @endif
     </div>
     <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
   </div>
  </div>
 </div>
</div>
@endsection