<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coordenador extends Model
{
    protected $table = 'tracoord';
    protected $primaryKey = 'n_codicoord';
    public $timestamps = false;
    protected $fillable = ['c_nomecoord',
                           'c_apelcoord',
                            'n_codimorad',
                            'c_nomeentid',
                            'n_codientid'
                        ];

    use HasFactory;
}
