<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    public $timestamps = true;
    protected $fillable = [
         'id_divisi', 'nama_divisi', 'created_at', 'updated_at', 'change_by'
     ];
}
