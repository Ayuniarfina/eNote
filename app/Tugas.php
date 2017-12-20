<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Tugas extends Model
{
    public $timestamps = true;
     protected $fillable = [
         'id_tugas','deskripsi', 'id_acara', 'created_at', 'updated_at', 'change_by'
     ];
}
