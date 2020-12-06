<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyStandUp extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'yesterday',
        'today',
        'challenge',
    ];

//    public function project()
//    {
//        return $this->belongsTo(Project::class, 'project_id', 'id');
//    }

    public function sprint()
    {
        return $this->belongsTo(Sprint::class, 'sprint_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
