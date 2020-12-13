<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StandUpAnswer extends Model
{
    use HasFactory;

    protected $fillable=[
        'answer',
    ];

    public function question()
    {
        return $this->belongsTo(StandUpQuestion::class,'question_id','id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
