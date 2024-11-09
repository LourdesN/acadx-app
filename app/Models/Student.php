<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $table = 'students';

    public $fillable = [
        'admn_no',
        'email',
        'full_name',
        'phone_number',
        'address',
        'id_number',
        'date_of_admission',
        'department_id',
        'course_id',
        'gender',
        'status'
    ];

    protected $casts = [
        'admn_no' => 'string',
        'email' => 'string',
        'full_name' => 'string',
        'address' => 'string',
        'date_of_admission' => 'date',
        'gender' => 'string',
        'status' => 'boolean'
    ];

    public static array $rules = [
        'admn_no' => 'nullable|string|max:100',
        'email' => 'nullable|string|max:255',
        'full_name' => 'required|string',
        'phone_number' => 'required',
        'address' => 'required|string|max:255',
        'id_number' => 'nullable',
        'date_of_admission' => 'required',
        'department_id' => 'nullable',
        'course_id' => 'required',
        'gender' => 'required|string|max:50',
        'status' => 'required|boolean',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function course(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Course::class, 'course_id');
    }

    public function department(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Department::class, 'department_id');
    }

    public function attendances(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Attendance::class, 'student_id');
    }

    public function courseworks(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Coursework::class, 'student_id');
    }

    public function exams(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Exam::class, 'student_id');
    }

    public function invoices(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Invoice::class, 'student_id');
    }

    public function receipts(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Receipt::class, 'student_id');
    }
}
