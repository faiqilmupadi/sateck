<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';
    protected $primaryKey = 'nim';

    protected $fillable = ['nim', 'nama', 'email', 'semester'];

    public function user()
    {
        return $this->belongsTo(User::class, 'email', 'email');
    }
}
