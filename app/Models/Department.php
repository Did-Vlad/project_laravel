<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class department extends Model
{
    protected $table = 'department';

    protected $fillable = [
        'name',
        'description',
        'addres',
        'city',
        'region',
        'postal_code',
    ];

    public function employees()
    {
        return $this->hasMany(Employee::class, 'department_id');
    }
}
