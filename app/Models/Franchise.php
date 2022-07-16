<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Franchise extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function publisher(){
        return $this->belongsTo(Publisher::class);
    }
}
