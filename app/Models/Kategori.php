<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
      'nama',
      'foto_kategori'
    ];
    protected $table = 'kategori';

      public function produk(){
    return $this->hasMany('App\Models\Produk');
    }
}
