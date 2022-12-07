<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $table = 'menu';

    public function User(){
        return $this->belongsTo(User::class);
    }

    public function Pembelian(){
        return $this->belongsTo(Pembelian::class);
    }

    protected $fillable = [
        'nama',
        'harga',
        'deskripsi',
        'gambar',
        'user_id',
    ];
}
