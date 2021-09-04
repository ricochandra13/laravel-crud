@extends('layout.master')
@section('judul')
Edit Cast ID {{$cast->id}}
@endsection
@section('isi')
<form action="/cast/{{$cast->id}}" method="POST">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" name="nama" value="{{$cast->nama}}" id="nama" placeholder="Masukkan nama">
        @error('nama')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="umur">Umur</label>
        <input type="text" class="form-control" name="umur" value="{{$cast->umur}}" id="umur" placeholder="Masukkan umur">
        @error('umur')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="bio">Biodata</label>
        <input type="textarea" class="form-control" name="bio" value="{{$cast->bio}}" id="bio" placeholder="Masukkan bio">
        @error('bio')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection