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
        'departement',
        'file_arsip',
        'status',
        'rejection_note',
        'signature',
        'signed_by',
        'sub_departement_id',
    ];

    public function signedBy()
    {
        return $this->belongsTo(User::class,'signed_by');
    }
    public function subDepartement()
    {
        return $this->belongsTo(SubDepartement::class, 'sub_departement_id');
    }
}
