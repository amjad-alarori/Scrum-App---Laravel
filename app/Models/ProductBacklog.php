<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductBacklog extends Model
{
    use HasFactory;
//    protected $table = 'product_backlogs';
    protected $fillable = [
        'title',
        'description',
        'priority',
        'business_value',
        'user_story',
        'story_points',
        'acceptance_criteria',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class,'project_id','id');
    }
}
