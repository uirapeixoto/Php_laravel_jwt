<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    public $timestamps = false;
    protected $guarded = ['id'];
    protected $table = 'municipios';

    protected $fillable = [
        'codigo_ibge', 'municipio', 'codigo_uf', 'uf', 'estado','latitude','longitude', 'estado_id'];

    function company() {
        return $this->belongsTo('App\Estado', 'estado_id');
    }
}
