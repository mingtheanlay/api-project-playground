<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // Create students table with student_id, name, email, phone, address, and course_id
    protected $fillable = ['name', 'email', 'phone', 'address', 'course_id'];
    
}
