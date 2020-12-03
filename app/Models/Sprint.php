<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sprint extends Model
{
    use HasFactory;



    public function project()
    {

        return $this->belongsTo(Project::class, 'project_id', 'id');

    }

    public function retrospective()
    {
        return $this->hasMany(Retrospective::class, 'sprint_id', 'id');
    }
}
