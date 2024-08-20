<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubDepartement extends Model
{
    use HasFactory;
    protected $table = 'sub_departements';
    protected $guard = [];
    protected $fillable = [
        'departement_id',
        'nama',
        'kode',
    ];

    public function departement()
    {
        return $this->belongsTo(Departement::class,'departement_id');
    }

    public function archives()
    {
        return $this->hasMany(Archive::class);
    }
}
