<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyStandUp extends Model
{
    use HasFactory;

    protected $fillable = [
        'stand_up_date'
    ];

    public function sprint()
    {
        return $this->belongsTo(Sprint::class, 'sprint_id', 'id');
    }

    public function questions()
    {
        return $this->hasMany(StandUpQuestion::class,'stand_up_id','id');
    }
}
