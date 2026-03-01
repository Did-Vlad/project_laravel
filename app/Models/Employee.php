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
        return $this->belongsTo(position::class);
    }
}
