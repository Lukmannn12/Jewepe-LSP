<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class artikel extends Model
{
    use HasFactory;

    protected $table = 'artikels';
   
    protected $fillable = [
        'nama_pen',
        'judul',
        'tanggal',
        'isi',
        'gambar',
        'status',
        'user_id',
    ];



    protected $primaryKey = 'id_artikel';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
