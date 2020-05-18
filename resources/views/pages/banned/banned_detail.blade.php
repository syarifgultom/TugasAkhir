@extends('layouts.app')

@section('content')
	<div class="container">
		<table class="table  table-bordered">
            <tr>
                <td>Judul</td>
                <td>Admin</td>
                <td>Jenis</td>
                <td>Deskripsi</td>
            </tr>
            @foreach ($ban as $bans)
            <tr>
                <td><a href="/artikel/lihat/detail/{{$bans->id}}/u/{{Auth::user()->id}}">{{$bans->judul}}</a></td>
                <td>{{$bans->name}}</td>
                <td>{{$bans->jenis}}</td>
                <td>{{$bans->deskripsi}}</td>
            </tr>
            @endforeach
        </table>
	</div>
@endsection