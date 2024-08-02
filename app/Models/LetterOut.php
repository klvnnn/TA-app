<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LetterOut extends Model
{
    use HasFactory;
    protected $table = 'letter_outs';
    protected $guard = [];
    protected $fillable = [
        'no_surat',
        'jenis_surat',
        'unit_surat',         
        'tanggal_surat',
        'file_surat',
        'perihal_surat',
        'tujuan_surat',
        'pertalian_surat',
        'filename',
    ];
}
