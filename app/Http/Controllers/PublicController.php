<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
    	return view('pages.tips.tips');
    }

    public function kontak()
    {
    	return view('pages.kontak.kontak');
    }

    public function tentang()
    {
    	return view('pages.tentang.tentang-kami');
    }

}