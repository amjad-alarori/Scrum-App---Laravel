<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.

     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'biography',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function scrumTeams()
    {
        return $this->hasMany(ScrumTeam::class,'userId','id');
    }

    public function retrospective()
    {
        return $this->hasMany(Retrospective::class, 'user_id', 'id');
    }

    public function dailyStandUp()
    {
        return $this->hasMany(DailyStandUp::class, 'user_id', 'id');
    }

    public function standUpAnswers()
    {
        return $this->hasMany(StandUpAnswer::class,'user_id','id');
    }

    public function standUpAnswersOfSprint(Sprint $sprint)
    {
        return $this->hasMany(StandUpAnswer::class,'user_id','id')
            ->whereHas('question',function (Builder $query, $sprint){
                $query->where('stand_up_id','=',$sprint->id);
                });
    }



}
