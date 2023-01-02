<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationForm extends Model
{
    use HasFactory;
    protected $primaryKey = 'applicant_id';

    protected $fillable = [
        'applicant_id',
        'national_passport_id',
        'first_name',
        'middle_name',
        'last_name',
        'gender',
        'date_of_birth',
        'address',
        'citizenship',
        'email',
        'phone',
        'intake',
        'course_id',
        'transcripts'
    ];

    public function getCoursesApp()
    {
        return $this->belongsTo(Courses::class, 'course_id');
    }
}
