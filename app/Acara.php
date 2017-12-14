<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Acara extends Model
{
    public $timestamps = true;
     protected $fillable = [
         'id_acara','name', 'ketua', 'sekretaris1', 'sekretaris2', 'bendahara1', 'bendahara2', 'created_at', 'updated_at','change_by'
     ];
}
