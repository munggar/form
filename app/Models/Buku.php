<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pembelian;

class Buku extends Model
{
    protected $table = 'Buku';
    protected $primarykey = 'id';
    protected $guarded = [
        'id',
    ];
    
    public function pembelian(){
        return $this->hasMany(Pembelian::class);
    }

}
