<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'student';
    protected $primaryKey = 'id_student';
    protected $fillable = [
        'student_name',
        'gender',
        'birth_date'
    ];
    public $timestamps = false;

}
