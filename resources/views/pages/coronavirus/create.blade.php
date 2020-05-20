@extends('layouts.app')

@section('content')
	
	<div class="container">
		<form method="POST" action="/coronavirus/create/proses">
			@csrf
			<div class="form-group">
			    <label for="select">Provinsi</label>
			    <select name="id_provinsi" id="select" class="form-control">
			    	@foreach($provinsi as $p)
			    	<option value="{{ $p->id }}">{{ $p->nama }}</option>
			    	@endforeach
			    </select>
			 </div>
			 <div class="form-group">
			 	<label>Infeksi</label>
			 	<input type="text" name="infeksi" class="form-control">
			 </div>
			 <div class="form-group">
			 	<label>Sembuh</label>
			 	<input type="text" name="sembuh" class="form-control">
			 </div>
			 <div class="form-group">
			 	<label>Meninggal</label>
			 	<input type="text" name="meninggal" class="form-control">
			 </div>
			 <div class="form-group">
			 	<button type="submit" class="btn btn-primary btn-block">Update!</button>
			 </div>
		 </form>
	</div>

@endsection