<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table = "pessoa";
    public $primaryKey = "cd_pessoa";

    public function empresa(){
        return $this->belongsTo( 'App\Empresa','cd_empresa');
    }

    public function setor(){
        return $this->belongsTo( 'App\Setor','cd_setor');
    }

    public function cargo(){
        return $this->belongsTo( 'App\Cargo','cd_cargo');
    }
}
