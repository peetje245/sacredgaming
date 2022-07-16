<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Game extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $appends = [
        'date',
        'month',
        'image'
    ];

    public function publisher(){
        return $this->belongsTo(Publisher::class);
    }

    public function developer(){
        return $this->belongsTo(Developer::class);
    }

    public function serie(){
        return $this->belongsTo(Serie::class);
    }

    public function franchise(){
        return $this->belongsTo(Franchise::class);
    }

    public function genres(){
        return $this->belongsToMany(Genre::class);
    }

    public function platforms(){
        return $this->belongsToMany(Platform::class);
    }

    public function images(){
        return $this->morphMany(Image::class, 'imageable');
    }

    public function videos(){
        return $this->morphMany(Video::class, 'videoable');
    }

    public function getDateAttribute()
    {
        if($this->tbd){
            return 'tbd';
        }
        
        if($this->tba){
            return 'tba';
        }

        if($this->q1 && $this->release_year){
            return 'Q1 ' . $this->release_year;
        }

        if($this->q2 && $this->release_year){
            return 'Q2 ' . $this->release_year;
        }

        if($this->q3 && $this->release_year){
            return 'Q3 ' . $this->release_year;
        }

        if($this->q4 && $this->release_year){
            return 'Q4 ' . $this->release_year;
        }

        if($this->release_day && $this->release_month && $this->release_year){
            return $this->release_day . ' ' . $this->getMonthTextual() . ' ' . $this->release_year;
        }

        if($this->release_month && $this->release_year){
            return $this->getMonthTextual() . ' ' . $this->release_year;
        }

        if($this->release_year){
            return $this->release_year;
        }
    }

    public function getMonthAttribute($releaseMonth)
    {
        return $this->getMonthTextual();
    }

    public function getImageAttribute(){
        if($this->images->count()){
            return $this->images->first();
        }
    }

    public function getMonthTextual()
    {
        switch ($this->release_month) {
            case 1:
                return 'January';
            case 2:
                return 'February';
            case 3:
                return 'March';
            case 4:
                return 'April';
            case 5:
                return 'May';
            case 6:
                return 'June';
            case 7:
                return 'July';
            case 8:
                return 'August';
            case 9:
                return 'September';
            case 10:
                return 'October';
            case 11:
                return 'November';
            case 12:
                return 'December';
        }
    }

    public function getMonthNumber($releaseMonth)
    {
        switch ($releaseMonth) {
            case 'January':
                return 1;
            case 'February':
                return 2;
            case 'March':
                return 3;
            case 'April':
                return 4;
            case 'May':
                return 5;
            case 'June':
                return 6;
            case 'July':
                return 7;
            case 'August':
                return 8;
            case 'September':
                return 9;
            case 'October':
                return 10;
            case 'November':
                return 11;
            case 'December':
                return 12;
        }
    }
}
