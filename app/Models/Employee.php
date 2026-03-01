<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employee';

    protected $fillable = [
        'first_name',
        'last_name',
        'midl_name',
        'gender',
        'phone',
        'email',
        'hire_date',
        'termination_date',
        'status',
        'position_id',
    ];

    public function position()
    {
        return $this->belongsTo(Position::class, 'position_id');
    }

    public function tasks()
    {
        return $this->hasMany(Task::class, 'employee_id');
    }

    public function trainings()
    {
        return $this->hasMany(Training::class, 'employee_id');
    }

    public function vacations()
    {
        return $this->hasMany(Vacation::class, 'employee_id');
    }

    public function projectAssignments()
    {
        return $this->hasMany(ProjectAssignment::class, 'employee_id');
    }
}