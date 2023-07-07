<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Golongan extends Model
{
    use HasFactory;
    protected $table = 'tb_golongan';
    protected $primaryKey = 'gol_id';
    protected $guarded = '[]';
    protected $fillable = [
        'gol_id',
        'gol_kode',
        'gol_nama'
    ];
    public function pelanggan()
    {
        return $this->hasMany(Pelanggan::class);    
    }
}
