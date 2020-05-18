@extends('layouts.app')

@section('content')
    <div class="container">

        {{-- Alerts --}}
        @if (\Session::has('ubah-sukses'))
        <div class="alert alert-success">
            <p>{{session('ubah-sukses')}}</p>
        </div>
        @endif
        @if (\Session::has('ubah-gagal'))
        <div class="alert alert-danger">
            <p>{{session('ubah-gagal')}}</p>
        </div>
        @endif

        <table class="table  table-bordered">
            <tr>
                <td>Judul</td>
                <td>Dibuat</td>
                <td>Diedit</td>
                <td>Ubah</td>
                <td>Hapus</td>
            </tr>
            @forelse ($ubah as $list)
            <tr>
                <td><a href="/artikel/lihat/detail/{{$list->id}}/u/{{Auth::user()->id}}">{{$list->judul}}</a></td>
                <td>{{$list->created_at}}</td>
                <td>{{$list->updated_at}}</td>
                <td>
                    <a href="/artikel/ubah/{{Auth::user()->id}}/a/{{$list->id}}/form" class="btn btn-warning">
                        Ubah
                    </a>
                </td>
                <td>
                    <a type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                        Hapus
                    </a>
                </td>
            </tr>
            
        </table>
    </div>


  
    <!-- Modal -->
    <form action="/artikel/hapus/{{Auth::user()->id}}/a/{{$list->id}}" method="GET">
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    Anda yakin akan menghapus artikel ini?
                    <b>Artikel yang terhapus tidak dapat dikembalikan!</b>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                <button type="submit" class="btn btn-light">Hapus</button>
                </div>
            </div>
            </div>
        </div>
    </form>
    @empty
        <h1 class="display-4">Kosong,, Coba Buat <a href="/artikel/buat"> Artikel </a> Terlebih Dahulu</h1>
    @endforelse
@endsection