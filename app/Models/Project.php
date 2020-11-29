<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public function scrumTeam()
    {
        return $this->hasMany(ScrumTeam::class, 'projectId', 'id')
            ->orderBy('roleId')->orderBy('userId');
    }
}
