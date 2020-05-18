<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users'; 

    public function users()
    {
        return $this->hasMany('App\Artikel');
    }

    public function laporan()
    {
    	return $this->hasMany('App\Laporan');
    }

}
