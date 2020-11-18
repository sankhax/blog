<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class ShortModel extends Model
{
    protected $table = 'blog';
    // protected $fillable = ['title','body'];
    protected $fillable=[
      'judul','penulis','isi'
    ];


    public static $rules = [
      'judul'=>'required',
      'penulis'=>'required',
      'isi'=>'required'
    ];
}
