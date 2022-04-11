<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    use HasFactory;
    protected $table = 'matakuliah';
    protected $guarded = ['id'];

    public function mahasiswa_matakuliah()
    {
        return $this->belongsToMany(Mahasiswa_Matakuliah::class);
    }
}
