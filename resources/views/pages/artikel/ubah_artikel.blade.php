@extends('layouts.form')

@section('form-artikel')
    <div class="container">

        @foreach ($ubah as $u)
        <form action="/artikel/ubah/proses" method="POST" enctype="multipart/form-data" class="mt-4">
            @csrf
            <div class="form-group">
                <label for="title"><b>Title</b></label>
                <input name="judul" type="text" id="title" class="form-control" placeholder="Tulis Judul Disini.." value="{{$u->judul}}">
            </div>
            <div class="form-group">
                <label for="thumbnail"><b>Thumbnail</b></label>
                <input name="foto" type="file" id="thumbnail" class="form-control" value="{{$u->foto}}">
            </div>
            <textarea name="konten" id="konten" cols="10" rows="80" value="{{$u->konten}}"></textarea>
        
            {{-- Hidden Inputs --}}
            <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">

            <button class="btn btn-success btn-block mt-3">Buat!</button>
            </form>
            @endforeach
    </div>

    <script>
        CKEDITOR.replace('konten');
    </script>
@endsection