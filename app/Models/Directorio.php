<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Directorio extends Model
{
    public $timestamps = false;

    protected $primarykey = 'codigoEntrada';
    use HasFactory;
    

}
