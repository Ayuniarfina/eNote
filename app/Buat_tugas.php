<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buat_tugas extends Model
{
    public $timestamps = true;
     protected $fillable = [
         'id_buattugas', 'id_user', 'id_tugas', 'status', 'created_at', 'updated_at', 'change_by'
     ];
}
