<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StandUpQuestion extends Model
{
    use HasFactory;

    protected $fillable =[
        'question',
    ];

    public function dailyStandUp()
    {
        return $this->belongsTo(DailyStandUp::class,'stand_up_id','id');
    }

    public function answers()
    {
        return $this->hasMany(StandUpAnswer::class,'question_id','id');
    }
}
