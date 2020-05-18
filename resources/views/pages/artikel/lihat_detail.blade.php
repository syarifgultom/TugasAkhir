@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Alert -->
        @if (\Session::has('laporan-sukses'))
            <div class="alert alert-success">
                <p>{{ session('laporan-sukses') }}</p>
            </div>
        @endif
        @if (\Session::has('laporan-gagal'))
            <div class="alert alert-danger">
                <p>{{ session('laporan-gagal') }}</p>
            </div>
        @endif

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
            Laporkan
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Laporkan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form action="/laporkan/{{ $id_artikel }}/a/{{ $id_author }}" method="GET">
                        <div class="form-group">
                            <Label for="desk"> <b> Jenis </b> </Label>
                            <select class="custom-select" name="jenis">
                                <option selected>Pilih Jenis Pelanggaran</option>
                                <option value="Hoax">Hoax</option>
                                <option value="Rasis">Rasis</option>
                                <option value="Konten-Tidak-Pantas">Konten Tidak Pantas</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <Label for="desk"> <b> Deskripsi </b> </Label>
                            <textarea name="deskripsi"  id="desk" class="form-control" rows="10"></textarea>
                        </div>
                        <input type="hidden" name="id_user" value="{{$id_author}}">
                        <input type="hidden" name="id_artikel" value="{{$id_artikel}}">
                    
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                <button type="submit" class="btn btn-primary">Kirim Laporan</button>
                </div>
                </form>
            </div>
            </div>
        </div>
        

        @foreach($konten as $kontens)
            <h1 class="display-3">{{$kontens->judul}}</h1>
            @foreach ($user as $users)
                <p>Author: {{$users->name}}</p>
            @endforeach
            <div>
                {!! $kontens->konten !!}
            </div>
        @endforeach
    </div>
@endsection 