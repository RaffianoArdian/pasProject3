<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Breed extends Model
{
    public function kucings()
    {
        return $this->hasMany(Kucing::class);
    }
}
