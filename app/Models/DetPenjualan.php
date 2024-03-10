<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetPenjualan extends Model
{
    protected $table = 'det_penjualan';
    protected $primaryKey = 'id_detpenjualan';
    protected $fillable = ['id_penjualan','id_buku','jumlah'];
    public $timestamps = false;

    static function tambah_det_penjualan($id_buku, $id_penjualan, $jumlah){
        DetPenjualan::create([
            'id_penjualan' => $id_penjualan,
            'id_buku' => $id_buku,
            'jumlah' => $jumlah,
        ]);
    }
}
