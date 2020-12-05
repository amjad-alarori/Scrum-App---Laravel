<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DefOfDone extends Model
{
    use HasFactory;

    public function project()
    {
        return $this->belongsTo(Project::class,'projectId','id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
