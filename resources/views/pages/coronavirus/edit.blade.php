@extends('layouts.app')

@section('content')
	
	<div class="container">
		<form method="POST" action="/coronavirus/edit/proses">
			@csrf
			@foreach($covid as $p)
			<div class="form-group">
			    <label for="select">Provinsi</label>
			    <select name="id_provinsi" id="select" class="form-control">
			    	<option value="{{ $p->id_provinsi }}">{{ $p->nama }}</option>
			    	
			    </select>
			 </div>
			 <div class="form-group">
			 	<label>Infeksi</label>
			 	<input type="text" name="infeksi" class="form-control" value="{{$p->infeksi}}">
			 </div>
			 <div class="form-group">
			 	<label>Sembuh</label>
			 	<input type="text" name="sembuh" class="form-control" value="{{$p->sembuh}}">
			 </div>
			 <div class="form-group">
			 	<label>Meninggal</label>
			 	<input type="text" name="meninggal" class="form-control" value="{{$p->meninggal}}">
			 </div>
			 <input type="hidden" name="id" value="{{$p->id}}">
			 <div class="form-group">
			 	<button type="submit" class="btn btn-primary btn-block">Update!</button>
			 </div>
			 @endforeach
		 </form>
	</div>

@endsection