<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LetterIn extends Model
{
    use HasFactory;
    protected $table = 'letter_ins';
    protected $guard = [];
    protected $fillable = [
        'no_surat',
        'tanggal_surat',
        'perihal_surat',
        'pengirim_surat',
        'file_surat',
        'disposisi_surat',
        'diteruskan_ke',
        'pertalian_surat',
        'filename',
    ];
}
