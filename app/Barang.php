<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Barang extends Model
{
    use SoftDeletes;

    protected $table = 'barangs';
    protected $fillable = [
        'nama', 'cabang_id', 'status',
    ];

    protected $dates = ['deleted_at'];
}
