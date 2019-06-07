<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uzorak extends Model
{
    protected $table = 'uzorci';
    protected $fillable = [
      'naziv', 'vreme_prikupljanja', 'sirina', 'visina', 'status'
    ];
}
