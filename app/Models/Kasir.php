<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasir extends Model
{
    protected $table = 'Kasir';
    protected $primarykey = 'id_kasir';
    protected $guarded = [
        'id_kasir',
    ];
}
