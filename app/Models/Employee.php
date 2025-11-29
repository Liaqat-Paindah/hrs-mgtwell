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
        'birth_date',
        'nid',
        'blood_group',
        'phone',
        'second_phone',
        'account_number',
        'position',
        'gender',
        'employee_id',
        'department_id',
        'project',
        'current_address',
        'work_station',
        'gross_salary',
        'tax',
        'net_salary',
        'account_status',
        'permanent_address',
        'profile',          // if storing employee profile here
        'nid_attachment',
        'documents_attachments',
        'cv_attachment',
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
}
