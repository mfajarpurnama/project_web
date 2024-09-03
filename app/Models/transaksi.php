<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'Game_type',
        'jenis_pembayaran',
        'harga',
        'transaction_date'
       ];

}
