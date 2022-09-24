<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\WorkDepartment;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'phone_no',
        'work_dept',
        'job',
        'sex',
        'birth_date',
        'salary',
        'hire_date',
        'is_active',
    ];

    public function work_department()
    {
        return $this->belongsTo(WorkDepartment::class, 'work_dept');
    }
}
