@extends('layouts.app')

@section('content')
    @if (\Session::has('role'))
        <div class="container">

            <h1 class="display-4 text-center">Apa yang ingin anda lakukan sekarang?</h1>

            <div class="row mt-5">
                <div class="col-sm-3 mx-auto">
                    <a href="{{ url('/artikel/buat') }}" style="text-decoration: none;">
                        <div class="card">
                            <img class="card-img-top" src="images/create_article.png" alt="Card image cap">
                            <div class="card-body">
                            <h5>Buat Artikel?</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 mx-auto">
                    <a href="artikel/ubah/{{Auth::user()->id}} " style="text-decoration: none;">
                        <div class="card">
                            <img class="card-img-top img-thumbnail" src="images/edit_article.png" alt="Card image cap" style="height: 250px;">
                            <div class="card-body">
                            <h5>Ubah Artikel?</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 mx-auto">
                    <a href="{{ url('/artikel/lihat') }}" style="text-decoration: none;">
                        <div class="card">
                            <img class="card-img-top" src="images/read_article.png" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title">Lihat Artikel!</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    @else
        <div class="container">
            <div class="alert alert-danger">
                <p>Fitur buat artikel dapat digunakan jika anda memiliki akun</p>
            </div>
            
            <div class="row mt-5">
                <div class="col-sm-3 mx-auto">
                    <a href="{{ url('/artikel/lihat') }}" style="text-decoration: none;">
                        <div class="card">
                            <img class="card-img-top" src="images/read_article.png" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title">Lihat Artikel!</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        
    @endif
@endsection