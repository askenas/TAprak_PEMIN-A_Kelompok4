<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// Alfiyanato Ghani Wijaya
class Prodi extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'nama',
    ];

    public $timestamps = false;


    
    public function mahasiswas()
    {
        return $this->hasMany(Mahasiswa::class, 'prodiId');
    }
}