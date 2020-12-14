<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    public function sprint()
    {
        return $this->belongsTo(Sprint::class, 'sprint_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function backlog()
    {
        return $this->belongsTo(ProductBacklog::class, 'backlog_id', 'id');
    }
}
