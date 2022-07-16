<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $hidden = [
        'imageable_id',
        'imageable_type',
    ];

    public function imageable()
    {
        return $this->morphTo();
    }

    public function store($image){
        $data = new Image;

        if($image){
            $file= $image;
            
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('/files'), $filename);
            $data->name = $filename;
        }
        $data->save();

        return $data;
    }
}
