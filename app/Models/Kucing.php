<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kucing extends Model
{
    use HasFactory;

    protected $table = 'tabel_kucing';

    protected $fillable = [
        'nama', 'tanggal_lahir', 'berat', 'warna', 'kondisi_kesehatan',
        // Add other attributes as needed
    ];
    
    public function breed()
    {
        return $this->belongsTo(Breed::class, 'jenis_id');
    }
}
