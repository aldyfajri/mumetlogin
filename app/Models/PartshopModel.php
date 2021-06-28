<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class PartshopModel extends Model
{
    // protected tabel = partshop

    protected $table = "partshop";

    protected $fillable = [
        "dealer", "nama_partshop", "alamat", "no_hp", "jenis_partshop"
    ];
}
