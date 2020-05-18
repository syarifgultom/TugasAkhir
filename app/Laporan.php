<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table = 'laporans';

    public function users()
    {
    	return $this->belongsTo('App\Users');
    }

    public function laporan()
    {
    	return $this->hasManyThrough('App\Users','App\Artikel','id','id');
    }
}