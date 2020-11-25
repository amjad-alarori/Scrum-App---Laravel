<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScrumTeam extends Model
{
    use HasFactory;

    protected $fillable=[
        'userId',
        'projectId',
        'roleId',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'userId','id');
    }

    public function project()
    {
        return $this->belongsTo(Project::class,'projectId','id');
    }

    public function scrumRole()
    {
        return $this->belongsTo(ScrumRole::class,'roleId','id');
    }
}
