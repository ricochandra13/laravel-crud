@extends('layout.master')
@section('judul')
Create Cast
@endsection
@section('isi')
<form action="/cast" method="POST">
    @csrf
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama">
        @error('nama')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="umur">Umur</label>
        <input type="text" class="form-control" name="umur" id="umur" placeholder="Masukkan umur">
        @error('umur')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="bio">Biodata</label>
        <input type="textarea" class="form-control" name="bio" id="bio" placeholder="Masukkan bio">
        @error('bio')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
</form>
@endsection