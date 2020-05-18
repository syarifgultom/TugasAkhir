@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($artikel as $key)
            <div class="col col-sm-4 mb-3">
                <div class="card">
                    @if (empty($key->foto))
                    <img class="card-img-top img-thumbnail" src="/images/default_artikel_icon.png" alt="Artikel Images" style="height:300px;width:100%;">
                    @else
                        <img class="card-img-top img-thumbnail" src="/images/{{ $key->foto }}" alt="Artikel Images" style="height:300px;width:100%;">
                    @endif
                    
                        <div class="card-body">
                            <h5 class="card-title">{{ $key->judul }}</h5>
                            <a href="/artikel/lihat/detail/{{$key->id}}/u/{{$key->id_user}}" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection