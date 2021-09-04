@extends('layout.master')
@section('judul')
Detail List Cast ID {{$cast->id}}
@endsection
@section('isi')
<div class="col-md-3">
    <div class="card card-primary card-outline">
        <div class="card-body box-profile">
        <div class="text-center">
            <img class="profile-user-img img-fluid img-circle" src="{{asset('template/dist/img/user4-128x128.jpg')}}" alt="User profile picture">
        </div>

        <h3 class="profile-username text-center">{{$cast->nama}}</h3>
        
        <p class="text-muted text-center">{{$cast->bio}}</p>

        <ul class="list-group list-group-unbordered mb-3">
            <li class="list-group-item">
            <b>Umur</b> <a class="float-right">{{$cast->umur}} Tahun</a>
            </li>
        </ul>
        <a href="/cast" class="btn btn-primary btn-block"><b>Kembali</b></a>
        </div>
        <!-- /.card-body -->
    </div>
</div>
@endsection