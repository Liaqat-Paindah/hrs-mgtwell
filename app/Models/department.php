<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class department extends Model
{
    use HasFactory;
     protected $fillable = [
        'department_name',
        'parent_department_id',
        'department_head_id',
        'description'
    ];

    // Self-referencing for parent department
    public function parentDepartment(): BelongsTo
    {
        return $this->belongsTo(Department::class, 'parent_department_id');
    }

    // Get all sub-departments
    public function subDepartments(): HasMany
    {
        return $this->hasMany(Department::class, 'parent_department_id');
    }

    // Department head
    public function departmentHead(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'department_head_id');
    }

    // Employees in this department
    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class);
    }
    
}
