<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $table = 'tb_users';
    protected $primaryKey = 'user_id';
    protected $guarded = '[]';
    protected $fillable = [
        'user_id',
        'user_email',
        'user_password',
        'user_nama',
        'user_alamat',
        'user_hp'
    ];
    public function Pelanggan()
    {
        return $this->hasMany(Pelanggan::class);    
    }
}
