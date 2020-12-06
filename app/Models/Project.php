<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

/**
 * @property mixed scrumTeam
 */
class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'mission',
        'vision',
        'deadline',
        'sprintLength'
    ];

    public function roleAuth()
    {
        return $this->scrumTeam->where('userId','==', Auth::id())->first()->roleId;
    }

    public function scrumTeam()
    {
        return $this->hasMany(ScrumTeam::class, 'projectId', 'id')
            ->orderBy('roleId')->orderBy('userId');
    }

    public function sprints(){

        return $this->hasMany(Sprint::class, 'project_id', 'id');
    }

    public function backlogElements()
    {
        return $this->hasMany(ProductBacklog::class,'ProjectId' ,'id');

    }
}


