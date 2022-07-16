<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Serie extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function publisher(){
        return $this->belongsTo(Publisher::class);
    }

    public function developer(){
        return $this->belongsTo(Developer::class);
    }

    public function franchise(){
        return $this->belongsTo(Franchise::class);
    }
}
