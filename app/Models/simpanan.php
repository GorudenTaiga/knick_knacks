<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class simpanan extends Model
{
    use HasFactory;
    protected $table = 'simpanan';
    protected $fillable = ['userid', 'produk', 'harga', 'jumlah'];
}
