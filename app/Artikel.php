<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = 'artikels';

    public function artikels()
    {
        return $this->belongsTo('App\Users');
    }

    public function laporan()
    {
    	return $this->hasMany('App\Laporan');
    }

}
