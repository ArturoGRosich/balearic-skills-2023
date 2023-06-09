<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Espais extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function images() {
        return $this->hasMany(EspaiImatge::class, 'espai_id');
    }
}
