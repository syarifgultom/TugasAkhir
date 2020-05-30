@extends('layouts.app')

@section('content')
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
    <div class="container">
        <div class="row">
            @foreach ($artikel as $key)
            <div class="col col-sm-4 mb-3">
                <div class="card">
                    @if (empty($key->foto))
                    <img class="card-img-top img-thumbnail" src="{{ url('/images/default_artikel_icon.png') }}" alt="Artikel Images" style="height:300px;width:100%;">
                    @else
                        <img class="card-img-top img-thumbnail" src="{{ url('/images/') }}/{{ $key->foto }}" alt="Artikel Images" style="height:300px;width:100%;">
                    @endif
                    
                        <div class="card-body">
                            <h5 class="card-title">{{ $key->judul }}</h5>
                            <a href="{{ url('artikel/lihat/detail/') }}/{{$key->id}}/u/{{$key->id_user}} " class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection