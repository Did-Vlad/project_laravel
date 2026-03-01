<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectAssignment extends Model
{
    protected $table  = 'project_assignments';
    protected $fillable = [
        'employee_id',
        'position_id',
        'start_date',
        'end_date',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
 public function position()
    {
        return $this->belongsTo(Position::class);
    }
}
