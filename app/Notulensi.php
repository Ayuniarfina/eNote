<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notulensi extends Model
{
    public $timestamps = true;
    protected $primaryKey='id_notulensi';
     protected $fillable = [
         'id_notulensi','id_acara', 'id_user', 'deskripsi', 'id_divisi', 'created_at', 'updated_at', 'change_by'
     ];
}
