<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    protected $table = 'testimoni';
    protected $primaryKey = 'testimoni_id';
    
    protected $fillable = [
        'nama', 
        'umur', 
        'asal',
        'profesi',
        'ungkapan'
    ];
}
