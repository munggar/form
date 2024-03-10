<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Buku;

class Pembelian extends Model
{
    protected $table = 'Pembelian';
    protected $primarykey = 'id';
    protected $guarded = [
        'id',
    ];

    public function buku(){
        return $this->belongsTo(Buku::class);
    }
  
}
