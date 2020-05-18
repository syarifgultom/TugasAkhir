<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\Users;

class ArtikelController extends Controller
{
    public function index()
    {
        return view('pages.artikel.artikel_page');
    }

    public function buat_artikel()
    {
        return view('pages.artikel.buat_artikel');
    }

    public function buat_proses(Request $request)
    {
        $validasi = [
            'judul' => 'string|required',
            'konten' => 'required',
            'foto' => 'required|image|mimes:jpeg,jpg,png,svg'
        ];
       
        $this->validate($request, $validasi);

        $imageName = time().'.'.$request->foto->extension();
        $request->foto->move(public_path('images'), $imageName);

        $artikel = new Artikel();

        $artikel->judul = $request->judul;
        $artikel->konten = $request->konten;
        $artikel->foto = $imageName;
        $artikel->id_user = $request->id_user;

        if ($artikel->save()) {
            return redirect('/artikel/lihat')->with('Sukses','Artikel Berhasil Dibuat!');
        }else{
            return redirect('/artikel/buat')->with('Gagal','Artikel Gagal Dibuat!');
        }

    }

    public function showAll()
    {
        $artikel = Artikel::all();
        return view('pages.artikel.lihat_artikel', ['artikel' => $artikel]);
    }

    public function detail_artikel($id_artikel, $id_author)
    {
        $detail['konten'] = Artikel::where('id',$id_artikel)->where('id_user',$id_author)->get();
        $detail['user'] = Users::where('id',$id_author)->get();
        $detail['id_author'] = $id_author;
        $detail['id_artikel'] = $id_artikel;
        
        return view('pages.artikel.lihat_detail', $detail);
    }

    public function ubah_list($id_author)
    {
        $ubah = Artikel::where('id_user', $id_author)->get();
        return view('pages.artikel.list_ubah_artikel', ['ubah' => $ubah]);
    }

    public function ubah_form($id_author, $id_artikel)
    {
        $ubah = Artikel::where('id',$id_artikel)->where('id_user',$id_author)->get();
        return view('pages.artikel.ubah_artikel', ['ubah' => $ubah]);
    }

    public function ubah_proses(Request $request)
    {
        $status = Artikel::where('id_user',$request->id_user)->update([
            'judul' => $request->judul,
            'konten' => $request->konten,
            'foto' => $request->foto
        ]);
        if ($status) {
            return redirect('/artikel/ubah/'.$request->id_user)->with('ubah-sukses','Berhasil Diubah');
        }else{
            return redirect('/artikel/ubah/'.$request->id_user)->with('ubah-gagal','Gagal Diubah');
        }
    }

    public function hapus($id_author, $id_artikel)
    {
        $find = Artikel::where('id',$id_artikel)->where('id_user',$id_author)->delete();
        
        if ($find) {
            return redirect('/artikel/ubah/'.$id_author)->with('hapus-sukses','Berhasil Dihapus');
        }else{
            return redirect('/artikel/ubah/'.$id_author)->with('hapus-gagal','Gagal Dihapus');
        }
    }

}
