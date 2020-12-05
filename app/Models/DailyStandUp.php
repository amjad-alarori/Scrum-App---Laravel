<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyStandUp extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'date',
        'yesterday',
        'today',
        'challenge',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id', 'id');
    }

    public function sprints(){

        return $this->hasMany(Sprint::class, 'project_id', 'id');
    }
}
