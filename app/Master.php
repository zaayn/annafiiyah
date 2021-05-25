<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
    protected $table = 'master';
    protected $primaryKey = 'master_id';
    
    protected $fillable = [
        'master_id', 
        'judul', 
        'isi',
        'image'
    ];
}
