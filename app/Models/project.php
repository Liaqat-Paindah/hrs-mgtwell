<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class project extends Model
{
    use HasFactory;
     protected $fillable = [
        'project_name',
        'project_code',
        'client',
        'project_manager_id',
        'start_date',
        'end_date',
        'status',
        'description'
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    /**
     * Get the project manager for this project
     */
    public function projectManager(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'project_manager_id');
    }

    /**
     * Get all assignments for this project
     */
    public function assignments(): HasMany
    {
        return $this->hasMany(ProjectAssignment::class);
    }

    /**
     * Get active team members
     */
    public function teamMembers(): HasMany
    {
        return $this->hasMany(ProjectAssignment::class)->where('assignment_status', 'active');
    }

    /**
     * Scope for active projects
     */
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }
}
