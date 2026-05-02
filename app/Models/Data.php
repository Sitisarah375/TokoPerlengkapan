<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;
    public $table = 'datas';
    protected $primaryKey = 'tokoID';
    protected $fillable = [
        'nama_produk',
        'harga',
        'deskripsi',
        'kategori',
        'image',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'kategori', 'categoryID');
    }
}
