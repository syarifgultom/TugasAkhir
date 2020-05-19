@extends('layouts.app')

@section('content')
	

	
	<div class="container">
		@if(session('role') == 'admin')
		<a href="/coronavirus/create" target="_blank" class="btn btn-primary btn-block mb-3">Insert new case!</a>

        <!-- Alert -->
        @if(\Session::has('failed'))
            <div class="alert alert-danger">
                <p>{{ session('failed') }}</p>
            </div>
        @endif

        <!-- Seluruh Indonesia -->

        <h1 class="text-center display-4">Indonesia</h1>
        <div class="row text-center mb-4">
            <div class="col">
                <div class="card">
                  <div class="card-header">
                    <h2><span style="color: grey;">Terinfeksi</span></h2>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><span style="color: grey;">{{ $infeksi }}</span></h5>
                  </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                  <div class="card-header">
                    <h2><span style="color: #79ed4e;">Sembuh</span></h2>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><span style="color: #79ed4e;">{{ $sembuh }}</span></h5>
                  </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                  <div class="card-header">
                    <h2><span style="color: red;">Meninggal</span></h2>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><span style="color: red;">{{ $meninggal }}</span></h5>
                  </div>
                </div>
            </div>
        </div>

        <!-- Setiap Provinsi -->
        <h2 class="display-4">Berdasarkan Provinsi</h2>
		<table class="table table-bordered">
            <tr>
                <td>Provinsi</td>
                <td>Terinfeksi</td>
                <td>Sembuh</td>
                <td>Meninggal</td>
                <td>Aksi</td>
            </tr>
            @foreach($covid as $p)
            <tr>
                <td><a href="">{{$p->nama}}</a></td>
                <td><span style="color: grey;"><b>{{$p->infeksi}}</b></span></td>
                <td><span style="color: #79ed4e;"><b>{{$p->sembuh}}</b></span></td>
                <td><span style="color: red;"><b>{{$p->meninggal}}</b></span></td>
                <td><a href="/coronavirus/edit/{{ $p->id }}" class="btn btn-primary">Edit</a></td>
            </tr>
            @endforeach
        </table>
        @else(session('role') == 'member')

        <h1 class="text-center display-4">Indonesia</h1>
        <div class="row text-center mb-4">
            <div class="col">
                <div class="card">
                  <div class="card-header">
                    <h2><span style="color: grey;">Terinfeksi</span></h2>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><span style="color: grey;">{{ $infeksi }}</span></h5>
                  </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                  <div class="card-header">
                    <h2><span style="color: #79ed4e;">Sembuh</span></h2>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><span style="color: #79ed4e;">{{ $sembuh }}</span></h5>
                  </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                  <div class="card-header">
                    <h2><span style="color: red;">Meninggal</span></h2>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><span style="color: red;">{{ $meninggal }}</span></h5>
                  </div>
                </div>
            </div>
        </div>

        <table class="table  table-bordered">
            <tr>
                <td>Provinsi</td>
                <td>Terinfeksi</td>
                <td>Sembuh</td>
                <td>Meninggal</td>
            </tr>
            @foreach($covid as $p)
            <tr>
                <td><a href="">{{$p->nama}}</a></td>
                <td><span style="color: grey;"><b>{{$p->infeksi}}</b></span></td>
                <td><span style="color: #79ed4e;"><b>{{$p->sembuh}}</b></span></td>
                <td><span style="color: red;"><b>{{$p->meninggal}}</b></span></td>
            </tr>
            @endforeach
        </table>
        @endif

	</div>
	

@endsection