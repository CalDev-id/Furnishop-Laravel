<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;
    protected $table = 'pembelian';

    public function User(){
        return $this->belongsTo(User::class);
    }

    public function Menu(){
        return $this->belongsTo(Menu::class);
    }
    protected $fillable = [
        'user_id',
        'jumlah',
        'menu_id',
        'hTotal'
    ];
}
