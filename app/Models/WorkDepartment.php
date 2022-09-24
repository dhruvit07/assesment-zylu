<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;

class WorkDepartment extends Model
{
    use HasFactory;

    public function employees()
    {
        $this->hasMany(Employee::class);
    }
}
