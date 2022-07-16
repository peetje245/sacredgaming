<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Video extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $hidden = [
        'videoable_id',
        'videoable_type',
    ];

    public function videoable()
    {
        return $this->morphTo();
    }
}
