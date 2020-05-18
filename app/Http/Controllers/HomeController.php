<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use App\Laporan;
use App\Artikel;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $role = Users::select('role')->where('id', Auth::user()->id)->get();
        foreach ($role as $key) {
            if ($key->role == 'admin') {
                $user['role'] = $key->role;
                session()->put('role', $user['role']);
                $user['count'] = Laporan::all()->count();
                return view('home', $user);
            }else{
                $user['role'] = $key->role;
                session()->put('role', $user['role']);
                return redirect('/artikel');
            }
                
        }
        
    }
}
