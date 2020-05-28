@extends('layouts.form')

@section('form-artikel')
    <div class="container">
        <form action="{{ url('/artikel/buat/proses') }}" method="POST" enctype="multipart/form-data" class="mt-4">
            @csrf
            <div class="form-group">
                <label for="title"><b>Title</b></label>
                <input name="judul" type="text" id="title" class="form-control" placeholder="Tulis Judul Disini..">
            </div>
            <div class="form-group">
                <label for="thumbnail"><b>Thumbnail</b></label>
                <input name="foto" type="file" id="thumbnail" class="form-control">
            </div>
            <textarea name="konten" id="konten" cols="10" rows="80"></textarea>
            
            {{-- Hidden Inputs --}}
            <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">

            <button class="btn btn-success btn-block mt-3">Buat!</button>
        </form>
    </div>


    <script>
        CKEDITOR.replace('konten');
    </script>
@endsection