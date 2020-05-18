@extends('layouts.app')

@section('content')
	
	<div class="container">
		<table class="table  table-bordered">
            <tr>
                <td>Judul</td>
                <td>Pelapor</td>
                <td>Jenis</td>
                <td>Deskripsi</td>
                <td>Banned</td>
            </tr>
            @foreach ($laporan as $laporans)
            <tr>
                <td><a href="/artikel/lihat/detail/{{$laporans->id}}/u/{{Auth::user()->id}}">{{$laporans->judul}}</a></td>
                <td>{{$laporans->name}}</td>
                <td>{{$laporans->jenis}}</td>
                <td>{{$laporans->deskripsi}}</td>
                <td>
                    <a href="banned/l/{{ $laporans->id_laporan }}/this-a/{{ $laporans->id_artikel }}/admin/{{ Auth::user()->id }}" type="button" class="btn btn-danger">
                        BAN!
                    </a>
                </td>
            </tr>
            @endforeach
        </table>
	</div>

@endsection