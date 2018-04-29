<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    public $timestamps = false;
    protected $guarded = ['id'];
    protected $table = 'estados';


    protected $fillable = [
        'codigo_uf', 'estado', 'uf'
    ];

    public function municipios()
    {
        return $this->hasMany('App\Municipio');
    }
}
