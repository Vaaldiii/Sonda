<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Course extends Model{
    protected $fillable = [
        'name',
        'description',
        'hours',
        'location',
        'cost',
        'schedule',
        'start_date',
        'end_date',
        'user_id' // !temporary
    ];

    protected $dates = [
        'start_date',
        'end_date'
    ];

    public function scopePublished($query){
        $query->where('end_date', '>=', Carbon::now());
    }

    public function setStartDateAttribute($date){
        $this->attributes['start_date'] = Carbon::parse($date);
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
