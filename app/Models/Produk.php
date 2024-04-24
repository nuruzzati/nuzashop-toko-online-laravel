<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'produk';
    protected $fillable = [
        'nama_produk',
        'kategori_id',
        'harga_produk',
        'berat_produk',
        'foto_produk',
        'deskripsi_produk',
        'stok_produk'
    ];

    public function kategori(){ 
      return $this->belongsTo('App\Models\Kategori', 'kategori_id'); 
}


}
