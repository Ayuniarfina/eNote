<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
  public $timestamps = true;
   protected $fillable = [
       'id_file','nama_file', 'id_acara', 'created_at', 'updated_at', 'change_by'
   ];
}
