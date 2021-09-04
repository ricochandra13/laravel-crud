@extends('layout.master')
@section('judul')
List Cast
@endsection
@section('isi')
<a href="/cast/create" class="btn btn-primary">Tambah</a>
<div class="card-body pb-0">
    <div class="row">
        @forelse ($cast as $key=>$value)
        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
            <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0"><b>{{$value->id}}</b></div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="lead"><b>{{$value->nama}}</b></h2>
                            <p class="text-muted text-sm"><b>Bio: </b> {{$value->bio}} </p>
                            <p class="text-muted text-sm"><b>Umur: </b> {{$value->umur}} Tahun</p>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-right">
                        <a href="/cast/{{$value->id}}" class="btn btn-sm btn-info">Show</a>
                        <a href="/cast/{{$value->id}}/edit" class="btn btn-sm btn-primary">Edit</a>
                        <form action="/cast/{{$value->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-sm btn-danger my-1" value="Delete">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
            <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">Undefined</div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-7">
                            <h2 class="lead"><b>Undefined</b></h2>
                            <p class="text-muted text-sm"><b>Bio: </b> Undefined</p>
                            <p class="text-muted text-sm"><b>Umur: </b> Undefined</p>
                        </div>
                        <div class="col-5 text-center">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforelse
    </div>
</div>
@endsection