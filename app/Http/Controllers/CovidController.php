<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Provinsi;
use App\Covid;

class CovidController extends Controller
{
    public function index()
    {
        $data['covid'] = DB::table('covid')->join('provinsi','covid.id_provinsi','=','provinsi.id')->get();
        $data['infeksi'] = DB::table('covid')->join('provinsi','covid.id_provinsi','=','provinsi.id')->sum('covid.infeksi');
        $data['sembuh'] = DB::table('covid')->join('provinsi','covid.id_provinsi','=','provinsi.id')->sum('covid.sembuh');
        $data['meninggal'] = DB::table('covid')->join('provinsi','covid.id_provinsi','=','provinsi.id')->sum('covid.meninggal');
        return view('pages.coronavirus.info',$data);
    }

    public function create()
    {
        $data['provinsi'] = Provinsi::all();
        return view('pages.coronavirus.create',$data);
    }

    public function create_proses(Request $request)
    {
        $infeksi = $request->infeksi;
        $sembuh = $request->sembuh;
        $meninggal = $request->meninggal;
        $id_provinsi = $request->id_provinsi;
        $status = DB::table('covid')->insert([
            'infeksi' => $infeksi,
            'sembuh' => $sembuh,
            'meninggal' => $meninggal,
            'id_provinsi' => $id_provinsi
        ]);
        if ($status) {
            return redirect('/coronavirus')->with('updated','Data Berhasil di Update!');
        }else{
            return redirect('/coronavirus')->with('failed','Data Gagal di Update!');
        }
    }

    public function edit($id)
    {   
        $data['covid'] = DB::table('covid')->join('provinsi','covid.id_provinsi','=','provinsi.id')->where('covid.id',$id)->get();
        return view('pages.coronavirus.edit',$data);
    }

    public function edit_proses(Request $request)
    {
        $infeksi = $request->infeksi;
        $sembuh = $request->sembuh;
        $meninggal = $request->meninggal;
        $id = $request->id;
        $status = DB::table('covid')->where('id',$id)->update([
            'infeksi' => $infeksi,
            'sembuh' => $sembuh,
            'meninggal' => $meninggal,
        ]);
        if ($status) {
            return redirect('/coronavirus')->with('updated','Data Berhasil di Update!');
        }else{
            return redirect('/coronavirus')->with('failed','Data Gagal di Update!');
        }
    }


}