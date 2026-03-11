<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'project';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'description',
        'start_date',
        'end_date',
        'budget',
    ];

    public function tasks()
    {
        return $this->hasMany(Task::class, 'project_id');
    }
}