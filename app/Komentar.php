<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    
    public $timestamps = true;
     protected $fillable = [
         'id_actionnotulensi','id_notulensi', 'id_user', 'nama', 'komentar', 'created_at', 'updated_at', 'change_by'
     ];
}
