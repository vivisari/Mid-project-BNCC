<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class karyawan1 extends Model
{
    use HasFactory;
    protected $fillable = [
        'namakaryawan', 'umurkaryawan', 'alamatkaryawan', 'no_telp'
    ];
}
