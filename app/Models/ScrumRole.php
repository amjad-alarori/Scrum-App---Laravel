<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScrumRole extends Model
{
    use HasFactory;

    public function scrumTeams()
    {
        return $this->hasMany(ScrumTeam::class, 'roleId', 'id');
    }
}
