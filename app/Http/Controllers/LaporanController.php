<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Laporan;
use App\Artikel;

class LaporanController extends Controller
{
    public function index()
    {

    }

    public function lapor(Request $request)
    {
        $validasi = [
            'jenis' => 'required',
            'deskripsi' => 'required|string'
        ];
        $this->validate($request, $validasi);

        $laporan = new Laporan();
        $laporan->jenis = $request->jenis;
        $laporan->deskripsi = $request->deskripsi;
        $laporan->id_artikel = $request->id_artikel;
        $laporan->id_user = $request->id_user;
        
        if ($laporan->save()) {
            return redirect('/artikel/lihat/detail/'.$request->id_artikel.'/u/'.$request->id_user)->with('laporan-sukses','Laporan Berhasil Direkam');
        }else{
            return redirect('/artikel/lihat/detail/'.$request->id_artikel.'/u/'.$request->id_user)->with('laporan-gagal','Laporan Gagal Direkam');
        }
    }

    public function showAllLaporan()
    {
        if (session('role') != 'admin'){
            return redirect('/')->with('access-denied','Access Denied!');
        }else{
            $data['laporan'] = DB::table('laporans')->join('users','laporans.id_user','=','users.id')->join('artikels','laporans.id_artikel','=','artikels.id')->get();
            return view('pages.laporan.laporan_detail',$data);
        }
        
    }

    public function banned($laporan,$artikel,$admin)
    {
         if (session('role') != 'admin') {
            return redirect('/')->with('access-denied','Access Denied!');
        }else{
           $laporan = Laporan::where('id_laporan',$laporan)->delete();
            $artikel = Artikel::find($artikel);
            $artikel->delete();
        }
            

            return redirect('/home');
        }
    }
