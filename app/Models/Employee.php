<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Attendance;
use App\Models\User;
use App\Models\LeavesAdmin;



class Employee extends Model
{
    use HasFactory;
       protected $fillable = [
    'name',
    'fname',
    'email',
    'birth_date',
    'blood_group',
    'phone',
    'second_phone',
    'account_number',
    'position',
    'gender',
    'employee_id',
    'department_id',
    'manager_id',
    'employment_type',
    'start_date',
    'end_date',
    'employment_status',
    'project',
    'current_address',
    'work_station',
    'gross_salary',
    'tax',
    'net_salary',
    'permanent_address',
    'nid',
    'tin',
    'profile',
    'nid_attachment',
    'documents_attachments',
    'cv_attachment'
];
  
    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function Leaves()
    {
        return $this->hasMany(LeavesAdmin::class);
    }


    public function department()
    {
        return $this->belongsTo(department::class);
    }

    // Relationship: Employee has a manager (another employee)
    public function manager()
    {
        return $this->belongsTo(Employee::class, 'manager_id');
    }

    // Relationship: Employee can be manager of other employees
    public function subordinates()
    {
        return $this->hasMany(Employee::class, 'manager_id');
    }

    // Relationship: Employee can be department head
    public function departmentHead()
    {
        return $this->hasOne(department::class, 'department_head_id');
    }
}
