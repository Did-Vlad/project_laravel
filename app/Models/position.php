<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class position extends Model
{
  protected $table = 'position';
   
  public function employees()
  {
    return $this->hasMany(Employee::class, 'department_id');
}
}
