<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archive extends Model
{
    use HasFactory;
    protected $table = "archives";
    protected $guard = [];
    protected $fillable = [
        'no_arsip',
        'tanggal_arsip',
        'file_arsip',
        'departement',
        'status',
    ];
}
