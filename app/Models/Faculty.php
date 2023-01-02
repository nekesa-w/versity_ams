<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;
    protected $primaryKey = 'faculty_id';

    protected $fillable = [
        'faculty_id',
        'faculty_name',
        'role',
        'created_at',
        'updated_at',
    ];

    public function getCourses()
    {
        return $this->hasMany(Courses::class, 'faculty_id', 'faculty_id');
    }
}
