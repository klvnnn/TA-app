<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LetterType extends Model
{
    use HasFactory;
    protected $table = 'letter_types';
    protected $guard = [];
    protected $fillable = [
        'nama',
        'kode',
    ];
}
