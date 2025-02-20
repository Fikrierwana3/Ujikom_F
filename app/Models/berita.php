<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'cover', 'judul', 'id_user', 'id_kategori', 'isi'];
    public $timestamps = true;

    public function kategori()
    {
        return $this->BelongsTo(kategori::class, 'id_kategori');
    }

    public function user()
    {
        return $this->BelongsTo(User::class, 'id_user');
    }

    public function deleteImage(){
        if($this->cover && file_exists(public_path('img/berita' . $this->cover))){
            return unlink(public_path('img/berita' . $this->cover));
        }
    }
}
