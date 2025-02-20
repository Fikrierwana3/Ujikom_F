<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama', 'deskripsi'];
    public $timestamps = true;

    public function berita()
    {
        return $this->hasMany('App\Models\berita', 'id_kategori', 'id');
    }
}
