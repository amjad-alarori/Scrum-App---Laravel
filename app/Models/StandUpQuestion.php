<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class StandUpQuestion extends Model
{
    use HasFactory;

    protected $fillable = [
        'question',
    ];

    public function dailyStandUp()
    {
        return $this->belongsTo(DailyStandUp::class, 'stand_up_id', 'id');
    }

    public function answers()
    {
        return $this->hasMany(StandUpAnswer::class, 'question_id', 'id');
    }

    public function usersAnswers(User $user = null)
    {
        if ($user === null):
            $user = Auth::user();
        endif;

        return $this->hasMany(StandUpAnswer::class, 'question_id', 'id')
            ->where('user_id', '=', $user->id)->get();
    }
}
